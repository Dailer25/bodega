<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Access\Response;
use App\Http\Controllers\Controller;
use App\Models\Persona;
use App\Models\Empleado;
use App\Models\Cliente;
use Symfony\Contracts\Service\Attribute\Required;
use App\Models\Producto;
use App\Models\Stock;
use App\Models\Tipoproducto;

class ProductController extends Controller
{
    public function newproduct(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'type'=>'required',
            'stockt'=>'required'
        ]);
        $producto = new Producto;
        $product2 = Producto::where("name", "=", $request->name);
        if (isset($product2->id)) {
            response()->json([
                "message"=>"existing product"
            ]);
        } else {
            $producto->name = $request->name;
            $producto->price = $request->price;
            $producto->id_tipoproductos = $request->type;
            $producto->id_stocks = $request->stock;
        }

        
        //falra agregar cambios al stock
    }

}
