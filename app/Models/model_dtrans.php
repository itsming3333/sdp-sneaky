<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_dtrans extends Model
{
    protected $connection= 'mysql';
    protected $table= 'dtrans';
    protected $fillable= [
        'id_transaksi',
        'id_dsneaker',
        'jumlah',
        'subtotal'
    ];
}
