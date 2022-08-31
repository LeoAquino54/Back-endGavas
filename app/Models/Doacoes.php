<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doacoes extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cod_Doacoes',
        'Nome_Doacoes',
        'Valor_Doacoes',
    ];

}
