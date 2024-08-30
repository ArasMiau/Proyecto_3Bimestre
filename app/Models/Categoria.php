<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $primaryKey = 'CategoriaID'; // Corregido
    protected $fillable = ["CategoriaID", "Nombre", "Descripcion"];
}
