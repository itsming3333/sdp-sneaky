<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_dtrans extends Model
{
    protected $connection= 'mysql';
    protected $table= 'dtrans';
    protected $primaryKey= ['id_transaksi','id_dsneaker'];
    protected $fillable= [
        'id_transaksi',
        'id_dsneaker',
        'jumlah',
        'subtotal'
    ];
}
