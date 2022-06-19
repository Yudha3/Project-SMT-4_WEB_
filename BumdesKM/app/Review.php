<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Review extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_transaction', 'id_user', 'date', 'comment'
    ];

    protected $hidden = [
        
    ];

    public function transaction() {
        return $this->belongsTo(TransactionOut::class, 'id_transaction', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
