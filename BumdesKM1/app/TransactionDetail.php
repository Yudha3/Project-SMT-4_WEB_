<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TransactionDetail extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_transaction', 'id_product', 'qty', 'price', 'subtotal'
    ];

    protected $hidden = [
        
    ];

    public function transaction() {
        return $this->belongsTo(TransactionOut::class, 'id_transaction', 'id');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }
}
