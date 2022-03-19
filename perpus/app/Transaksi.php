<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    protected $table = 'table_transaksi';


    protected $fillable = ['id_anggota', 'id_buku', 'id_petugas', 'tgl_pinjam'];
}
