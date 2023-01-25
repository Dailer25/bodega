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

class PeopleController extends Controller
{
    public function addclient(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'cellphone'=>'required',
            'direction' => 'required'
        ]);
        $persona = new Persona();
        $cliente = new Cliente();

        $cliente->id_persona = $request->id;

        $persona->id = $request->id;
        $persona->name = $request->name;
        $persona->lastname = $request->lastname;
        $persona->email = $request->email;
        $persona->cellphone = $request->cellphone;
        $persona->direction = $request->direction;
    }

    public function newemployed(Request $request)
    {
        $request->validate([
            'id'=>'required',
            'name' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'cellphone' => 'required',
            'password' => 'required',
            'direction'=>'required',
            'id_tipoempleados' => 'required',
        ]);
        $empleado = new Empleado();
        $people = new Persona();

        $people->id = $request->id;
        $people->name = $request->name;
        $people->lastname = $request->lastname;
        $people->email = $request->email;
        $people->direction = $request->direction;

        $empleado->password = Hash::make($request->password);
        $empleado->id_personas = $request->id;
        $empleado->id_tipoempleados = $request->id_tipoempleados;

    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        
    }

    

}
