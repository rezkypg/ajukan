<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User, App\DetailAcara, App\Tempat, App\Pakaian, App\Percetakan, App\SoundLighting;
use App\Merchandise, App\Dekorasi;
use Input, Request, Response, Auth;

class AdminController extends Controller
{
    public function login(){
        return view('admin/login')
            ->with('error', 'fine');
    }

    public function login_process(){

        if(Request::ajax()){
            // return Response::json(Request::all());
            $input = Request::all();
            $user = array(
                'username' => $input["username"],
                'password' => $input["password"]
            );

            if(Auth::attempt($user)){
                return Response::json("good");
            }

            else
                return Response::json("bad");
        }
    }

    public function dashboard(){

        if(Auth::check()){
        $users = User::getPesanan();
        // print_r($users);
        return view('admin/dashboard')
            ->with('data', $users);
        }

        return view('admin/login')->with('error', 'error');
    }

    public function user_detail(){
        $id_pengaju = Input::get('id_pengaju');

        $id_pesanan = Input::get('id_pesanan');



        $identitas = User::getUser($id_pengaju);

        $detail_acara = DetailAcara::getDetailAcara($id_pengaju);

        $tempat = Tempat::getTempat($id_pesanan);

        $pakaian = Pakaian::getPakaian($id_pesanan);

    if ($pakaian != null)
        foreach ($pakaian as $kostum)
                $kostum->jenis_pakaian = Pakaian::getJenis($kostum->id_jenis_pakaian);

        $percetakan = Percetakan::getPercetakan($id_pesanan);

    if ($percetakan != null)
            $jenis_percetakan = Percetakan::getJenis($percetakan[0]->id_jenis_percetakan);
    else
        $jenis_percetakan = null;

        $sound_lighting = SoundLighting::getSL($id_pesanan);

        if ($sound_lighting != null)
            $jenis_sl = SoundLighting::getJenis($sound_lighting[0]->id_jenis_sound_lighting);
    else
        $jenis_sl = null;

        $merchandise = Merchandise::getMerchandise($id_pesanan);

        if ($merchandise != null)
        $jenis_merchandise = Merchandise::getJenis($merchandise[0]->id_jenis_merchandise);
    else
        $jenis_merchandise = null;

        $dekorasi = Dekorasi::getDekorasi($id_pesanan);

    if ($dekorasi != null)
            $jenis_dekorasi = Dekorasi::getJenis($dekorasi[0]->id_jenis_dekorasi);
    else
        $jenis_dekorasi = null;
        
    

        // echo $coba['id_jenis_pakaian'];

        // print_r($id_pesanan);

    if ($tempat != null)
            $tempatnya = $tempat[0];
    else
        $tempatnya = null;
    if ($pakaian != null)
        $pakaiannya = $pakaian;
    else
        $pakaiannya = null;
    if ($percetakan != null)
        $percetakannya = $percetakan[0];
    else
        $percetakannya = null;
    if ($sound_lighting != null)
        $sound_lightingnya = $sound_lighting[0];
    else
        $sound_lightingnya = null;
    if ($merchandise != null)
        $merchandisenya = $merchandise[0];
    else
        $merchandisenya = null;
    if ($dekorasi != null)
        $dekorasinya = $dekorasi[0];
    else
        $dekorasinya = null;
   

        return view('admin/detail-user')

            ->with('identitas', $identitas[0])

            ->with('detail_acara', $detail_acara[0])

            ->with('tempat', $tempatnya)

            ->with('pakaian', $pakaiannya)

            ->with('percetakan', $percetakannya)

            ->with('jenis_percetakan', $jenis_percetakan)

            ->with('sound_lighting', $sound_lightingnya)

            ->with('jenis_sl', $jenis_sl)

            ->with('merchandise', $merchandisenya)

            ->with('jenis_merchandise', $jenis_merchandise)

            ->with('dekorasi', $dekorasinya)

            ->with('jenis_dekorasi', $jenis_dekorasi);
    }

    public function change_status(){

        $data = Request::all();
        // echo $data['id_pesanan'];
        User::changeStatus($data['id_pesanan'], $data['status']);

        return redirect('admin-dashboard');
    }

    public function delete_user(){
        $id_pengaju = Input::get('id_pengaju');;

        User::deleteUser($id_pengaju);

        return redirect('admin-dashboard');
    }
}
