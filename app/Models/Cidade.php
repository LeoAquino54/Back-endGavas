<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $table = "cidade";

    protected $fillable = [
        'Cod_Cidade',
        'Nome_Cidade',
        'Cod_UF_FK',
    ];
}
