<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Stmt\Return_;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['lastshop'];

    public function ventas()
    {
        return $this->hasMany(Venta::class, 'id');
    }
    public function personas()
    {
        return $this->belongsTo(Persona::class, 'id_personas');
    }
}
