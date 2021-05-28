<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'user';
    protected $fillable = [
        'nama_user',
        'alamat',
        'harga_mobil',
        'total_harga',
        'id_mobil'
    ];

    public function Penjualan()
    {
        return $this->hasMany('App\Penjualan', 'id');
    }

    public function Mobil()
    {
        return $this->belongsTo('App\Mobil', 'id');
    }
}