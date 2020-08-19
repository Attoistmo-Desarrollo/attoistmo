<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstimadorinsumoRequest;
use App\Estimadorinsumo;

class EstimadorinsumoController extends Controller
{
    public function index()
    {
        $Estimadorinsumos = Estimadorinsumo::latest()->get();

        return response()->json($Estimadorinsumos);
    }

    public function store(EstimadorinsumoRequest $request)
    {
        $Estimadorinsumo = Estimadorinsumo::create($request->all());

        return response()->json($Estimadorinsumo, 201);
    }

    public function show($id)
    {
        $Estimadorinsumo = Estimadorinsumo::findOrFail($id);

        return response()->json($Estimadorinsumo);
    }

    public function update(EstimadorinsumoRequest $request, $id)
    {
        $Estimadorinsumo = Estimadorinsumo::findOrFail($id);
        $Estimadorinsumo->update($request->all());

        return response()->json($Estimadorinsumo, 200);
    }

    public function destroy($id)
    {
        Estimadorinsumo::destroy($id);

        return response()->json(null, 204);
    }
}