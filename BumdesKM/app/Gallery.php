<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Gallery extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_product', 'image'
    ];

    protected $hidden = [
        
    ];

    public function products() {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
