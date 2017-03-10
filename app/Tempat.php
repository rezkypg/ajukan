<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tempat extends Model
{
    protected $table = 'tempat';
    public $timestamps = false;

    protected $fillable = ['id_pesanan', 'tipe', 'lokasi', 'kapasitas_tamu', 'sewa_jam', 'kapasitas_listrik_watt', 'budget', 'keterangan', 'j_bangku', 'j_ac', 'j_blower'];

    public static function getTempat($id_pesanan){
    	return DB::table('tempat')->where('id_pesanan', $id_pesanan)->get();
    }

    public static function getMaxId(){
        return DB::table('id_pesanan')->max('id');
    }
}
