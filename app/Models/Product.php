<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getDisplayPriceAttribute()
    {
        return '€' . substr_replace($this->price, ',', strlen($this->price) - 2 , 0);
    }
}
