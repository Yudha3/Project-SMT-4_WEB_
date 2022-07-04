<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ReportOut extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'id_transaction_outs', 'id_user', 'tgl_keluar', 'penerima', 'alamat', 'no_tlp',
        'ttl_hrg', 'Transactions_status'
    ];

    protected $hidden = [
        
    ];

    public function transactionout() {
        return $this->belongsTo(TransactionOut::class, 'id_transaction_outs', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
