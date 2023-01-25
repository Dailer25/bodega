<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productoventa extends Model
{
    use HasFactory;

    protected $fillable = ['amount'];

    public function ventas()
    {
        return $this->belongsTo(Venta::class, 'id_ventas');
    }
    public function productos()
    {
        return $this->belongsTo(Producto::class, 'id_productos');
    }
}
