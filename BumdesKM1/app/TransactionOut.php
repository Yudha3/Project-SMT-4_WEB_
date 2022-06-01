<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TransactionOut extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_users', 'date', 'recipient', 'address', 'phone',
        'total', 'resi', 'status'
    ];

    protected $hidden = [
        
    ];

    public function details() {
        return $this->hasMany(TransactionDetail::class, 'id_transaction', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_users', 'id');
    }
}
