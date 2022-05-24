<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gallery extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'products_id', 'image'
    ];

    protected $hidden = [
        
    ];

    public function products() {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }
}
