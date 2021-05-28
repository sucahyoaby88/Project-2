<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualan';
    protected $fillable = [
        'id_mobil',
        'id_admin',
        'id_user',
        'stock'
    ];

    public function Mobil(){
        return $this->belongsTo('App\Mobil', 'id_mobil');
    }

    public function Admin(){
        return $this->belongsTo('App\User', 'id_admin');
    }

    public function Users(){
        return $this->belongsTo('App\Users', 'id_user');
    }

}
