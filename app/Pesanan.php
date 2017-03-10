<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Pesanan extends Model
{
    protected $table = 'id_pesanan';
    public $timestamps = false;

    protected $fillable = ['id_pengaju', 'status'];
}
