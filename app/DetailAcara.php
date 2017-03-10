<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class DetailAcara extends Model
{
    protected $table = 'detail_acara';
    public $timestamps = false;

    protected $fillable = ['id_pengaju', 'tema', 'jenis', 'budget', 'deskripsi'];

    public static function getDetailAcara($id_pengaju){
    	return DB::table('detail_acara')->where('id_pengaju', $id_pengaju)->get();
    }
}
