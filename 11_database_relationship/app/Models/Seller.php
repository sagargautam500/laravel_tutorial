<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Seller extends Model
{
    use HasFactory;
    public function products(){
        // return $this->hasOne(Product::class);
        return $this->hasMany(Product::class);
    }
}
