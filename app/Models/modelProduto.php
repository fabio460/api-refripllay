<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelProduto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'valor',
        'data',
        'hora',
        'perecivel',
        'categoria'
    ];

}
