<?php

namespace App\Http\Controllers;

use App\Http\Requests\cronogramaRequest;
use App\cronograma;

class cronogramaController extends Controller
{
    public function index()
    {
        $cronogramas = cronograma::latest()->get();

        return response()->json($cronogramas);
    }

    public function store(cronogramaRequest $request)
    {
        $cronograma = cronograma::create($request->all());

        return response()->json($cronograma, 201);
    }

    public function show($id)
    {
        $cronograma = cronograma::findOrFail($id);

        return response()->json($cronograma);
    }

    public function update(cronogramaRequest $request, $id)
    {
        $cronograma = cronograma::findOrFail($id);
        $cronograma->update($request->all());

        return response()->json($cronograma, 200);
    }

    public function destroy($id)
    {
        cronograma::destroy($id);

        return response()->json(null, 204);
    }
}