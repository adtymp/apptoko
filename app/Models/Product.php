<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'image',
        'nama_produk',
        'gender',
        'kategori',
        'deskripsi' 
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
