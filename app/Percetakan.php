<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Percetakan extends Model
{
    protected $table = 'percetakan';
    public $timestamps = false;

    protected $fillable = ['id_pesanan', 'id_jenis_percetakan', 'acara', 'jumlah', 'lama_pesanan', 'budget', 'keterangan', 'desain'];

    public static function getPercetakan($id_pesanan){
    	return DB::table('percetakan')->where('id_pesanan', $id_pesanan)->get();
    }

    public static function getJenis($id_jenis_percetakan){
    	return DB::table('jenis_percetakan')->where('id', $id_jenis_percetakan)->pluck('jenis');
    }
}
