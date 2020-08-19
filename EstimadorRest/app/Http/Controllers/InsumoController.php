<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsumoRequest;
use App\Insumo;

class InsumoController extends Controller
{
    public function index()
    {
        $insumos = Insumo::latest()->get();

        return response()->json($insumos);
    }

    public function store(InsumoRequest $request)
    {
        $insumo = Insumo::create($request->all());

        return response()->json($insumo, 201);
    }

    public function show($id)
    {
        $insumo = Insumo::findOrFail($id);

        return response()->json($insumo);
    }

    public function update(InsumoRequest $request, $id)
    {
        $insumo = Insumo::findOrFail($id);
        $insumo->update($request->all());

        return response()->json($insumo, 200);
    }

    public function destroy($id)
    {
        Insumo::destroy($id);

        return response()->json(null, 204);
    }
}