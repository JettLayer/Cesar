<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peticion extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_usuario",
        "id_categoria",
        "titulo",
        "contenido",
        "status",
    ];
}
