<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $primaryKey = 'ProductoID'; 
    protected $fillable = ['ProductoID', 'Nombre', 'PrecioUnitario', 'stock', 'Descripcion', 'CategoriaID', 'ProveedorID'];

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'CategoriaID', 'CategoriaID');
    }

    public function proveedor() {
        return $this->belongsTo(Proveedor::class, 'ProveedorID', 'ProveedorID');
    }
}
