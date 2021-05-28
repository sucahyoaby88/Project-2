<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    protected $table = 'mobil';
    protected $fillable = [
        'nama_mobil',
        'harga_mobil',
        'stock',
        'gambar'
    ];

    public function getGambar()
    {
            if(!$this->gambar){
                return asset('images2/images/default.jpg');
            }
            return asset('images2/images/'.$this->gambar);
    }

    public function Penjualan()
    {
        return $this->hasMany('App\Penjualan', 'id');
    }

    public function Users(){
        return $this->hasMany('App\Users', 'id_mobil');
    }
}
