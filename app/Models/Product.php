<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //tambahkan kode untuk mapping ke tabel film
    protected $table = 'product';
    //mapping ke kolom fieldnya
    protected $fillable = ['name','jenis','harga','foto'];
}