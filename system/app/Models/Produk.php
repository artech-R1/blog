<?php

namespace App\Models;

class Produk extends Model
{
    protected $table = 'produk';
    protected $casts = [
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
        'berat' => 'decimal:2'
    ];

    function seller()
    {
        return $this->belongsTo(User::class,'id_user');
    }
    
    function getHarga(){
        return 'Rp. '.number_format($this->harga);
    }

    function getTanggal(){
        $tanggal = $this->cerated_at;
        return strftime("%d %b %Y", strtotime($tanggal));
    }

};
