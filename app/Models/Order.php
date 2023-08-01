<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
        //tambahkan kode untuk mapping ke tabel film
        protected $table = 'order';
        //mapping ke kolom fieldnya
        protected $fillable = ['nama_product','nama','no_wa','qty','total_harga','status'];

        // public function product()
        // {
        // return $this->belongsTo(Product::class,'id_product');
        // }

}


