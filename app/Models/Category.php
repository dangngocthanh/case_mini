<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function products(){
        return $this->hasMany(Product::class);
    }
    use HasFactory;
}
