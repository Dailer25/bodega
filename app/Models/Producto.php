<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price'];

    public function productoventas()
    {
        return $this->hasMany(Productoventa::class, 'id');
    }
    public function stocks()
    {
        return $this->belongsTo(Stock::class, 'id_stocks');
    }
    public function tipoproductos()
    {
        return $this->belongsTo(Tipoproducto::class, 'id_tipoproductos');
    }
}
