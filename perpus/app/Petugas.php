<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{

    protected $table = 'table_petugas';


    protected $fillable = [
        'nama_petugas', 'jenis_kelamin', 'alamat',
        'email', 'no_telp'
    ];
}
