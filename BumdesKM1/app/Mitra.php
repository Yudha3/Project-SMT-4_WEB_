<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Mitra extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'nm_mitra', 'alamat', 'no_tlp', 'tgl_gabung'
    ];

    protected $hidden = [
        
    ];
}
