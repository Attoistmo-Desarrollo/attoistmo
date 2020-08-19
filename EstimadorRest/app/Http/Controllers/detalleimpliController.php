<?php

namespace App\Http\Controllers;

use App\Http\Requests\detalleimpliRequest;
use App\detalleimpli;

class detalleimpliController extends Controller
{
    public function index()
    {
        $detalleimplis = detalleimpli::latest()->get();

        return response()->json($detalleimplis);
    }

    public function store(detalleimpliRequest $request)
    {
        $detalleimpli = detalleimpli::create($request->all());

        return response()->json($detalleimpli, 201);
    }

    public function show($id)
    {
        $detalleimpli = detalleimpli::findOrFail($id);

        return response()->json($detalleimpli);
    }

    public function update(detalleimpliRequest $request, $id)
    {
        $detalleimpli = detalleimpli::findOrFail($id);
        $detalleimpli->update($request->all());

        return response()->json($detalleimpli, 200);
    }

    public function destroy($id)
    {
        detalleimpli::destroy($id);

        return response()->json(null, 204);
    }
}