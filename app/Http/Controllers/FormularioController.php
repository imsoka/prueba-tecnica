<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormularioRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        return view('formulario');
    }

    public function store(StoreFormularioRequest $request)
    {
        DB::table('formularios')->insert([
            'modelo' => $request->modelo,
            'trato' => $request->trato,
            'nombre' => $request->nombre,
            'apellido1' => $request->apellido1,
            'apellido2' => $request->apellido2,
            'email' => $request->email,
            'movil' => $request->movil,
            'concesion_id' => $request->concesion_id,
        ]);

        return back();
    }
}
