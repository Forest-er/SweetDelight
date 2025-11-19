<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_recipe';

    protected $fillable = [
        'id_kategori',
        'id_user',
        'nama',
        'deskripsi',
        'bahan',
        'langkah',
        'gambar'
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kategori()
    {
        return $this->belongsTo(Categories::class, 'id_kategori', 'id_kategori');
    }
}
