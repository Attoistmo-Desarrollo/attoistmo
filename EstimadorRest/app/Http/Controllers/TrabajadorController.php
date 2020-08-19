<?php

namespace App\Http\Controllers;

use App\Http\Requests\TrabajadorRequest;
use App\Trabajador;

class TrabajadorController extends Controller
{
    public function index()
    {
        $trabajadors = Trabajador::latest()->get();

        return response()->json($trabajadors);
    }

    public function store(TrabajadorRequest $request)
    {
       // $trabajador = Trabajador::create($request->all());
        $trabajador = new Trabajador;
        $trabajador->id = $request->id;
	    $trabajador->nombre = $request->nombre;
        $trabajador->area = $request->area;
        $trabajador->id_estimador = $request->id_estimador;
        $trabajador->save();

        return response()->json($trabajador, 201);
    }

    public function show($id)
    {
        $trabajador = Trabajador::findOrFail($id);

        return response()->json($trabajador);
    }

    public function update(TrabajadorRequest $request, $id)
    {
        $trabajador = Trabajador::findOrFail($id);
        $trabajador->update($request->all());

        return response()->json($trabajador, 200);
    }

    public function destroy($id)
    {
        Trabajador::destroy($id);

        return response()->json(null, 204);
    }
}