<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title', 'description', 'materials', 'price_buy',
        'price', 'stock', 'weight', 'sold', 'image'
    ];

    protected $hidden = [
        
    ];

    public function galleries() {
        return $this->hasMany(Gallery::class, 'products_id', 'id');
    }
}
