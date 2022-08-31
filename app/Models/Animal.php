<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = "animal";

    protected $fillable = [
        'Nome_Animal',
        'Idade_Animal',
        'Caracteristica_Animal',
    ];
}
