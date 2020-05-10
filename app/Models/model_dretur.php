<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_dretur extends Model
{
    protected $connection= 'mysql';
    protected $table= 'dretur';
    protected $primaryKey= ['id_transaksi','id_dsneaker'];
    protected $fillable= [
        'id_transaksi',
        'id_dsneaker',
        'jumlah',
        'alasan_pengembalian',
        'status_pengembalian',
        'resi_pengembalian',
        'id_seller'
    ];
}
