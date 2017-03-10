<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Merchandise extends Model
{
    protected $table = 'merchandise';
    public $timestamps = false;

    protected $fillable = ['id_pesanan', 'id_jenis_merchandise', 'jumlah', 'lama_pengerjaan', 'budget', 'keterangan', 'desain'];

    public static function getMerchandise($id_pesanan){
    	return DB::table('merchandise')->where('id_pesanan', $id_pesanan)->get();
    }

    public static function getJenis($id_jenis_merchandise){
    	return DB::table('jenis_merchandise')->where('id', $id_jenis_merchandise)->pluck('jenis');
    }
}
