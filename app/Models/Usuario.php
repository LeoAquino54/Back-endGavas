<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    protected $table = "usuario";

    protected $fillable = [
        'Cod_Usuario',
        'Nome_Usuario',
        'Cod_Contato_FK',
    ];
}
