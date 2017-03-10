<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Dekorasi extends Model
{
    protected $table = 'dekorasi';
    public $timestamps = false;

    protected $fillable = ['id_pesanan', 'id_jenis_dekorasi', 'jenis_acara', 'jumlah', 'lama_pengerjaan', 'budget', 'keterangan', 'desain', 'lokasi'];

    public static function getDekorasi($id_pesanan){
    	return DB::table('dekorasi')->where('id_pesanan', $id_pesanan)->get();
    }

    public static function getJenis($id_jenis_dekorasi){
    	return DB::table('jenis_dekorasi')->where('id', $id_jenis_dekorasi)->pluck('jenis');
    }
}
