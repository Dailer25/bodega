<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'total'];

    public function productoventas()
    {
        return $this->hasMany(Productoventa::class, 'id');
    }
    public function clientes()
    {
        return $this->belongsTo(Cliente::class, 'id_clientes');
    }
    public function empleados()
    {
        return $this->belongsTo(Empleado::class, 'id_empleados');
    }
}
