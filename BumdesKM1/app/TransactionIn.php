<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TransactionIn extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_product', 'tgl_masuk', 'nama_brg', 'hrg_beli', 'jml_stok',
        'hrg_total'
    ];

    protected $hidden = [
        
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
