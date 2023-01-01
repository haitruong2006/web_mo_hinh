<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class Products_like extends Model
{
    use HasFactory;
    protected $table = "products_like";

    public function products(){
        return $this->belongsTo(Products::class,'id_product','id');
    }

}
