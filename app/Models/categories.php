<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $primaryKey = 'id_kategori'; // wajib sesuai DB
    protected $table = 'kategori';       // optional, Eloquent bisa deteksi otomatis
}
