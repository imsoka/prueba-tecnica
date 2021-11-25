<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConcesionRequest;
use App\Http\Requests\UpdateConcesionRequest;
use Illuminate\Http\Request;
use App\Models\Concesion;
use App\Models\Provincia;

class ConcesionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $provincia = Provincia::findOrFail($request->provincia);

        return response()->json([
            'concesiones' => $provincia->concesiones,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreConcesionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConcesionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Concesion  $concesion
     * @return \Illuminate\Http\Response
     */
    public function show(Concesion $concesion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Concesion  $concesion
     * @return \Illuminate\Http\Response
     */
    public function edit(Concesion $concesion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConcesionRequest  $request
     * @param  \App\Models\Concesion  $concesion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConcesionRequest $request, Concesion $concesion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Concesion  $concesion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Concesion $concesion)
    {
        //
    }
}
