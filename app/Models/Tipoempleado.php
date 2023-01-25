<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipoempleado extends Model
{
    use HasFactory;

    protected $fillable = ['cargo'];

    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id');
    }
}
