<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pakaian extends Model
{
    protected $table = 'konveksi_pakaian';
    public $timestamps = false;

    protected $fillable = ['id_pesanan', 'id_jenis_pakaian', 'lama_pesanan', 'budget', 'keterangan', 'desain', 's', 'm', 'l', 'xl', 'xxl'];

    public static function getPakaian($id_pesanan){
    	return DB::table('konveksi_pakaian')->where('id_pesanan', $id_pesanan)->get();
    }

    public static function getJenis($id_jenis_pakaian){
    	return DB::table('jenis_pakaian')->where('id', $id_jenis_pakaian)->pluck('jenis');
    }
}
