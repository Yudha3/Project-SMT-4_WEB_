<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'nama_brg', 'tgl_mskBrg', 'hrg_beli', 'hrg_jual',
        'stok', 'deskripsi'
    ];

    protected $hidden = [
        
    ];

    public function galleries() {
        return $this->hasMany(Gallery::class, 'product_id', 'id');
    }
}
