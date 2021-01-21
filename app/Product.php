<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    //Ci assicuriamo che solo questi valori vengano aggiunti alla tabella products
    protected $fillable = ['name', 'code', 'quantity', 'weight'];
}
