<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model

{

    public $table = 'urunler_tablosu';
    use HasFactory;
    protected $fillable =[
        'name',
        'qty',
        'price',
        'description',
     

    ];
}
