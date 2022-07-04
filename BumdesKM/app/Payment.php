<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Payment extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_transaction', 'date', 'payment', 'status'
    ];

    protected $hidden = [
        
    ];

    public function transactionout() {
        return $this->belongsTo(TransactionOut::class, 'id_transaction', 'id');
    }

}
