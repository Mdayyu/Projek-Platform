<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produkModel extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $primaryKey = 'idproduk';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'idproduk',
        'idkategori',
        'namaproduk',
        'gambar',
        'deskripsi',
        'rate',
        'hargabefore',
        'hargaafter',
        'tgldibuat',
    ];
}
