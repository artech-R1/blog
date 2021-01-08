<?php

namespace App\Models;

use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;

use Illuminate\Support\Str;

class Produk extends Model
{   

    use ProdukRelations, ProdukAttributes; 

    protected $table = 'produk';
    protected $casts = [
        'created_at'=> 'datetime',
        'updated_at'=> 'datetime',
        'berat' => 'decimal:2'
    ];

    
};
