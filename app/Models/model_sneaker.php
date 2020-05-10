<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_sneaker extends Model
{
    protected $connection= 'mysql';
    protected $table= 'sneaker';
    protected $primaryKey= 'id_sneaker';
    protected $fillable= [
        'id_sneaker',
        'id_user',
        'id_kategori',
        'nama_sneaker',
        'brand_sneaker',
        'harga_sneaker'
    ];
}
