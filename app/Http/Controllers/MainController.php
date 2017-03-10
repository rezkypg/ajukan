<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

//use App\Http\Requests;
use Request;
use App\User;
use App\Pesanan;
use App\DetailAcara;
use App\Tempat;
use App\Pakaian;
use App\Percetakan;
use App\SoundLighting;
use App\Merchandise;
use App\Dekorasi;
use Redirect;
use App\Http\Controllers\Controller;
use Input, File, Storage;
use DB;

class MainController extends Controller
{
    public function form(){
	if(session('sukses'))
	        return view('form')->with('sukses', 'sukses');
	else
		return view('form');
    }

    public function fill($input) {
	if ($input == '')
		$input = '-';
	return $input;
    }

    public function submit_form(){
		$data = Request::all();
        	User::create([
           	    'nama' => $data['nama'],
           	    'email' => $data['email'],
           	    'nomo' => $data['phone']
        	]);
	
		$idPengguna = User::getMaxId();
		
	        $pesanan = Pesanan::create([
		   'id_pengaju' => $idPengguna,
		   'status' => "Waiting"
		]);

		DetailAcara::create([
		   'id_pengaju' => $idPengguna,
		   'tema' => $data['theme'],
		   'jenis' => $data['event_type'],
		   'budget'=> $data['event_budget'], 
		   'deskripsi' => $data['event_description']
		]);

		if (!@($data['location_type'] == 0 && 
		$data['location'] == '' && 
		$data['capacity'] == '' && 
		$data['duration'] == '' && 
		$data['nElectricity'] == '' && 
		$data['facility_budget'] == '' && 
		$data['facility_description'] == '' && 
		$data['nChair'] == '' && 
		$data['nAC'] == '' && 
		$data['nBlower'] == '')) {
			Tempat::create([
		   	'id_pesanan' => $pesanan->id,
		   	'tipe'=> $data['location_type'],
		   	'lokasi'=> $this->fill($data['location']),
		  	'kapasitas_tamu'=> $this->fill($data['capacity']),  
		  	'sewa_jam'=> $this->fill($data['duration']),
		   	'kapasitas_listrik_watt'=> $this->fill($data['nElectricity']),
		   	'budget'=> $this->fill($data['facility_budget']),
		   	'keterangan'=> $this->fill($data['facility_description']),
		   	'j_bangku'=> $this->fill($data['nChair']),
		   	'j_ac'=> $this->fill($data['nAC']),
		   	'j_blower'=> $this->fill($data['nBlower'])	
			]);
		}
		$app_budget = Input::get('apparel_budget');
		$app_desain = Input::file('desain_baju');
		$app_description = Input::get('apparel_description');
		$app_s = Input::get('nS');
		$app_m = Input::get('nM');
		$app_l = Input::get('nL');
		$app_xl = Input::get('nXL');
		$app_xxl = Input::get('nXXL');
		$fileNameBaju;
		foreach ($app_budget as $key => $value) {
			$app_type = Input::get('a_type_'.$key.'');
			if(isset($app_desain[$key])){
				$topic = Request::file('desain_baju');
				$extension = $topic[$key]->getClientOriginalExtension();
				$fileNameBaju=$pesanan->id.'_'.$key.'_'.$data['nama'].'_desainBaju.'.$extension;
				Storage::disk('local')->put($fileNameBaju,  File::get($topic[$key]));
			}
			else{
				$fileNameBaju="";
			}

			if ($app_type == null)
				$app_type = 0;
			if (!($fileNameBaju == "" &&
			$app_type == 0 &&
			$app_budget[$key] == "" &&
			$app_description[$key] == "" &&
			$app_s[$key] == "" &&
			$app_m[$key] == "" &&
			$app_l[$key] == "" &&
			$app_xl[$key] == "" &&
			$app_xxl[$key] == "")) {

			Pakaian::create([
				'id_pesanan'=> $pesanan->id,
				'id_jenis_pakaian'=> $app_type,
				'lama_pesanan'=> '-',
				'budget'=> $this->fill($app_budget[$key]),
				'keterangan'=> $this->fill($app_description[$key]),
				'desain'=> $this->fill('storage/app/'.$fileNameBaju),
				's'=> $this->fill($app_s[$key]),
				'm'=> $this->fill($app_m[$key]),
				'l'=> $this->fill($app_l[$key]),
				'xl'=> $this->fill($app_xl[$key]),
				'xxl'=> $this->fill($app_xxl[$key])	
			]);
			}
		}

		$print_budget = Input::get('print_budget');
		$print_desain = Request::file('desain_percetakan');		
		$print_total = Input::get('nPrint');
		$print_duration = Input::get('print_duration');
		$print_description = Input::get('print_description');
		$fileNamePercetakan;
	        foreach ($print_budget as $key => $value) {
			$print_type = Input::get('p_type_'.$key.'');
			if(isset($print_desain[$key])){
				$topic=Request::file('desain_percetakan');
				$extension=$topic[$key]->getClientOriginalExtension();
				$fileNamePercetakan=$pesanan->id.'_'.$key.'_'.$data['nama'].'_desainPercetakan.'.$extension;
				Storage::disk('local')->put($fileNamePercetakan,File::get($topic[$key]));
			}
			else{
				$fileNamePercetakan="";
			}
			if ($print_type == null)
				$print_type = 0;
			if (!($fileNamePercetakan == "" &&
			$print_type == 0 &&
			$print_budget[$key] == "" &&
			$print_total[$key] == "" &&
			$print_duration[$key] == "" &&
			$print_description[$key] == "")) {
			
			Percetakan::create([
				'id_pesanan'=> $pesanan->id,
				'id_jenis_percetakan'=> $print_type,
				'acara'=> '-',
				'jumlah'=> $this->fill($print_total[$key]),
				'lama_pesanan'=> $this->fill($print_duration[$key]),
				'budget'=> $this->fill($print_budget[$key]),
				'keterangan'=> $this->fill($print_description[$key]),
				'desain'=> $this->fill('storage/app/'.$fileNamePercetakan),
			]);
			}
		}

		$sl_total = Input::get('nSL');		
		$sl_watt = Input::get('sl_watt');
		$sl_duration = Input::get('sl_duration');		
		$sl_budget = Input::get('sl_budget');
		$sl_description = Input::get('sl_description');

		foreach ($print_budget as $key => $value) {
			$sl_type = Input::get('sl_type_'.$key.'');
			if ($sl_type == null)
				$sl_type = 0;
			if (!($sl_type == 0 &&
			$sl_budget[$key] == "" &&
			$sl_total[$key] == "" &&
			$sl_duration[$key] == "" &&
			$sl_description[$key] == "" &&
			$sl_watt[$key] == "")) {

				SoundLighting::create([
					'id_pesanan'=>$pesanan->id,
					'id_jenis_sound_lighting'=> $sl_type,
					'kapasitas_listrik_watt'=> $this->fill($sl_watt[$key]),
					'jumlah'=> $this->fill($sl_total[$key]),
					'lama_sewa'=> $this->fill($sl_duration[$key]),
					'budget'=> $this->fill($sl_budget[$key]),
					'keterangan'=> $this->fill($sl_description[$key]),
				]);
			}
		}
		$merch_budget = Input::get('merchandise_budget');
		$merch_desain = Input::file('desain_merchandise');		
		$merch_total = Input::get('nMerchandise');
		$merch_duration = Input::get('merchandise_duration');
		$merch_description = Input::get('merchandise_description');
		$fileNameMerch;
                foreach ($merch_budget as $key => $value) {
			$merch_type = Input::get('m_type_'.$key.'');
			if(isset($merch_desain[$key])){
				$topic=Input::file('desain_merchandise');
				$extension=$topic[$key]->getClientOriginalExtension();
				$fileNameMerch=$pesanan->id.'_'.$key.'_'.$data[nama].'_desainMerchandise.'.$extension;
				Storage::disk('local')->put($fileNameMerch,File::get($topic[$key]));
			}
			else{
				$fileNameMerch="";
			}
			if ($merch_type == null)
				$merch_type = 0;
			if (!($fileNameMerch == "" &&
			$merch_type == 0 &&
			$merch_budget[$key] == "" &&
			$merch_total[$key] == "" &&
			$merch_duration[$key] == "" &&
			$merch_description[$key] == "")) {

			Merchandise::create([
			'id_pesanan'=>$pesanan->id,
			'id_jenis_merchandise'=> $merch_type,
			'jumlah'=> $this->fill($merch_total[$key]),
			'lama_pengerjaan'=> $this->fill($merch_duration[$key]),
			'budget'=> $this->fill($merch_budget[$key]),
			'keterangan'=> $this->fill($merch_description[$key]),
			'desain'=> $this->fill('storage/app/'.$fileNameMerch),
			]);
			}
		}


		$deko_total = Input::get('nDecor');
		$deko_duration = Input::get('decor_duration');		
		$deko_budget = Input::get('decor_budget');
		$deko_description = Input::get('decor_description');
		$deko_location = Input::get('type_decor');

		foreach ($deko_budget as $key => $value) {
			$deko_type = Input::get('d_type_'.$key.'');
			if ($deko_type == null)
				$deko_type = 0;
			if (!($deko_type == 0 &&
			$deko_budget[$key] == "" &&
			$deko_total[$key] == "" &&
			$deko_duration[$key] == "" &&
			$deko_description[$key] == "" &&
			$deko_location[$key] == "")) {

			Dekorasi::create([
				'id_pesanan'=>$pesanan->id,
				'id_jenis_dekorasi'=> $deko_type,
				'jenis_acara'=> '-',
				'jumlah'=> $this->fill($deko_total[$key]),
				'lama_pengerjaan'=> $this->fill($deko_duration[$key]),
				'budget'=> $this->fill($deko_budget[$key]),
				'keterangan'=> $this->fill($deko_description[$key]),
				'lokasi'=>$this->fill($deko_location[$key])
			]);
			}
		}

		
		
        return Redirect::to('/')->with('sukses', 'sukses');
    }
}
