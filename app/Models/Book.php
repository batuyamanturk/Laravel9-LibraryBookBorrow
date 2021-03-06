<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    #Many To One
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function shopcart()
    {
        return $this->hasMany(ShopCart::class);
    }

    public function order_book()
    {
        return $this->hasMany(order_book::class);
    }
}
