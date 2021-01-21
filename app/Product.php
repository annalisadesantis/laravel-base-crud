<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['nome', 'marca', 'quantita', 'descrizione', 'prezzo'];
}
