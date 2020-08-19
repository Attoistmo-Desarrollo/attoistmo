<?php

namespace App\Http\Controllers;

use App\Http\Requests\detallesRequest;
use App\detalles;

class detallesController extends Controller
{
    public function index()
    {
        $detalles = detalles::latest()->get();

        return response()->json($detalles);
    }

    public function store(detallesRequest $request)
    {
        $detalles = detalles::create($request->all());

        return response()->json($detalles, 201);
    }

    public function show($id)
    {
        $detalles = detalles::findOrFail($id);

        return response()->json($detalles);
    }

    public function update(detallesRequest $request, $id)
    {
        $detalles = detalles::findOrFail($id);
        $detalles->update($request->all());

        return response()->json($detalles, 200);
    }

    public function destroy($id)
    {
        detalles::destroy($id);

        return response()->json(null, 204);
    }
}