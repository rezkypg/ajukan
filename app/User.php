<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'identitas_pengaju';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'email', 'nomo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public static function getPesanan(){
        return DB::table('id_pesanan')
            ->join('identitas_pengaju', 'id_pesanan.id_pengaju', '=', 'identitas_pengaju.id')
            ->select('id_pesanan.id', 'id_pesanan.id_pengaju', 'id_pesanan.status', 'identitas_pengaju.nama', 
                'identitas_pengaju.email', 'identitas_pengaju.nomo')
            ->get();
    }

    public static function getUser($id_pengaju){
        return DB::table('identitas_pengaju')->where('id', $id_pengaju)->get();
    }

    public static function getMaxId(){
	   return DB::table('identitas_pengaju')->max('id');
    }

    public static function getStatus($id_pengaju){
        return DB::table('identitas_pengaju')->where('id', $id_pengaju)->pluck('status');
    }

    public static function changeStatus($id_pesanan, $status){
        if($status == 'Waiting'){
            DB::table('id_pesanan')->where('id', $id_pesanan)->update(['status'=>'Done']);
        }
        else{
            DB::table('id_pesanan')->where('id', $id_pesanan)->update(['status'=>'Waiting']);
        }
    }

    public static function deleteUser($id_pengaju){
        DB::table('identitas_pengaju')->where('id', $id_pengaju)->delete();
    }
}
