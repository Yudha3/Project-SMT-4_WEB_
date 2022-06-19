<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TransactionOut extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_user', 'date', 'recipient', 'address', 'phone',
        'subtotal', 'shipment', 'total', 'resi', 'status'
    ];

    protected $hidden = [
        
    ];

    public function details() {
        return $this->hasMany(TransactionDetail::class, 'id_transaction', 'id');
    }

    public function review() {
        return $this->hasMany(Review::class, 'id_transaction', 'id');
    }

    public function report() {
        return $this->hasMany(ReportOut::class, 'id_transaction_outs', 'id');
    }

    public function payment() {
        return $this->hasMany(Payment::class, 'id_transaction', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
