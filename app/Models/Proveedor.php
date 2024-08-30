<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $primaryKey = 'ProveedorID'; // Corregido
    protected $fillable = ["ProveedorID", "Nombre", "Telefono", "Direccion", "Nit", "Marca"];
}