<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['password'];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id');
    }
    public function tipoempleados()
    {
        return $this->belongsTo(Tipoempleado::class, 'id_tipoempleados');
    }
    public function personas()
    {
        return $this->belongsTo(Persona::class, 'id_personas');
    }
}
