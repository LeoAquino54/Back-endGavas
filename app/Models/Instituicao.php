<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instituicao extends Model
{
    use HasFactory;
    protected $table = "instituicao";

    protected $fillable = [
        'Cod_Instituicao',
        'Nome_Instituicao',
        'Cod_Contato_FK',
        'Cod_Endereco_FK',
    ];
}
