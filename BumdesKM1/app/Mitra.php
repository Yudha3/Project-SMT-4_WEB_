<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mitra extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'nama_mtr', 'alamat', 'no_telp', 'tgl_gabung', 'image'
    ];

    protected $hidden = [
        
    ];
}
