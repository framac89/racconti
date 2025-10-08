<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articoli extends Model
{
      protected $fillable = [
        'titolo',
        'data',
        'testo',
        'autore',
    ];
}
