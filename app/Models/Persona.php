<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    public $incrementing = 'false';
    
    protected $fillable = ['id', 'name', 'lastname', 'cellphone', 'direction'];

    public function empleados()
    {
        return $this->hasOne(Empleado::class, 'id');
    }
    public function clientes()
    {
        return $this->hasOne(Cliente::class, 'id');
    }
}
