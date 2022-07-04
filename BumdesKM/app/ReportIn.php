<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ReportIn extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_product', 'tgl_masuk', 'hrg_beli', 'jml_stok',
        'hrg_total'
    ];

    protected $hidden = [
        
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
