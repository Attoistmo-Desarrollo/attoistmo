<?php

namespace App\Http\Controllers;

use App\Http\Requests\cronogramaactividadesRequest;
use App\cronogramaactividades;

class cronogramaactividadesController extends Controller
{
    public function index()
    {
        $cronogramaactividades = cronogramaactividades::latest()->get();

        return response()->json($cronogramaactividades);
    }

    public function store(cronogramaactividadesRequest $request)
    {
        $cronogramaactividades = cronogramaactividades::create($request->all());

        return response()->json($cronogramaactividades, 201);
    }

    public function show($id)
    {
        $cronogramaactividades = cronogramaactividades::findOrFail($id);

        return response()->json($cronogramaactividades);
    }

    public function update(cronogramaactividadesRequest $request, $id)
    {
        $cronogramaactividades = cronogramaactividades::findOrFail($id);
        $cronogramaactividades->update($request->all());

        return response()->json($cronogramaactividades, 200);
    }

    public function destroy($id)
    {
        cronogramaactividades::destroy($id);

        return response()->json(null, 204);
    }
}