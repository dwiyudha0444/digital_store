<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        //tambahkan kode untuk mapping ke tabel film
        protected $table = 'order';
        //mapping ke kolom fieldnya
        protected $fillable = ['nama','no_wa','qty','total_harga','status'];
}
