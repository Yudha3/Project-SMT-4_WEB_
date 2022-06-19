<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class About extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'pengelola', 'contact', 'address', 'description',
        'image'
    ];

    protected $hidden = [
        
    ];

    
}
