<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    public $table = "pesanan";
    protected $fillable = ['id_pesanan','nama_pelanggan', 'nama_barang', 'qty', 'tgl_pesan'];

}
