<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cod_Endereco',
        'Rua_Endereco',
        'Bairro_Endereco',
        'Numero_Endereco',
        'Cod_UF_FK',
        'Cod_Cidade_FK',
    ];
}
