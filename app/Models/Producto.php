<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
<<<<<<< HEAD

    protected $primaryKey = 'ProductoID'; 
    protected $fillable = ['ProductoID', 'Nombre', 'PrecioUnitario', 'stock', 'Descripcion','CategoriaID', 'ProveedorID'];
    

    public function categoria() {
        return $this->belongsTo(Categoria::class, 'CategoriaID', 'CategoriaID');
    }

    public function proveedor() {
        return $this->belongsTo(Proveedor::class, 'ProveedorID', 'ProveedorID');
    }
=======
<<<<<<< HEAD

    protected $primaryKey = "ProductoID";
    protected $fillable = ["ProductoID", "Nombre", "PrecioUnitario", "stock", "Descripcion"];
=======
    protected $primaryKey = 'ProductoID'; 
    protected $fillable = ["ProductoID", "Nombre", "PrecioUnitario", "stock", "Descripcion"];

>>>>>>> a0d731ab595faca6a1c9f1f8ef07707db8fe0807
>>>>>>> 5d3cc81026752c25640f01d1b65edaeeda571f0f
}
