<?php

namespace App\Http\Controllers;

use App\Http\Requests\detalles1Request;
use App\detalles1;

class detalles1Controller extends Controller
{
    public function index()
    {
        $detalles1s = detalles1::latest()->get();

        return response()->json($detalles1s);
    }

    public function store(detalles1Request $request)
    {
        $detalles1 = detalles1::create($request->all());

        return response()->json($detalles1, 201);
    }

    public function show($id)
    {
        $detalles1 = detalles1::findOrFail($id);

        return response()->json($detalles1);
    }

    public function update(detalles1Request $request, $id)
    {
        $detalles1 = detalles1::findOrFail($id);
        $detalles1->update($request->all());

        return response()->json($detalles1, 200);
    }

    public function destroy($id)
    {
        detalles1::destroy($id);

        return response()->json(null, 204);
    }
}