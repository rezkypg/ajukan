<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SoundLighting extends Model
{
    protected $table = 'sound_lighting';
    public $timestamps = false;

    protected $fillable = ['id_pesanan', 'id_jenis_sound_lighting', 'kapasitas_listrik_watt', 'jumlah', 'lama_sewa', 'budget', 'keterangan'];

    public static function getSL($id_pesanan){
    	return DB::table('sound_lighting')->where('id_pesanan', $id_pesanan)->get();
    }

    public static function getJenis($id_jenis_sound_lighting){
    	return DB::table('jenis_sound_lighting')->where('id', $id_jenis_sound_lighting)->pluck('jenis');
    }
}
