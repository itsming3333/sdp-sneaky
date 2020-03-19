<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_dsneaker extends Model
{
    protected $connection= 'mysql';
    protected $table= 'dsneaker';
    protected $primaryKey= 'id_dsneaker';
    protected $fillable= [
        'id_dsneaker',
        'id_sneaker',
        'warna_sneaker',
        'ukuran_sneaker',
        'stok_sneaker'
    ];
}
