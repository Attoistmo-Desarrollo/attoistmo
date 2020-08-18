<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\estimadorinsumo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class estimadorinsumosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $estimadorinsumos = estimadorinsumo::all();
        return $estimadorinsumos;

        //return view('backEnd.estimadorinsumos.index', compact('estimadorinsumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return view('backEnd.estimadorinsumos.create');
        return $estimadorinsumos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $general = new estimadorinsumo;
        $general->Fecha = $request->Fecha;
        $general->nombre = $request->nombre;
        $general->save();
        $id = $general->id;
        $estimadorinsumo = estimadorinsumo::findOrFail($id);
        return $estimadorinsumo;
        // estimadorinsumo::create($request->all());
        // Session::flash('message', 'estimadorinsumo added!');
        // Session::flash('status', 'success');
        // return redirect('estimadorinsumos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $estimadorinsumo = estimadorinsumo::findOrFail($id);
        return $estimadorinsumo;
        //return view('backEnd.estimadorinsumos.show', compact('estimadorinsumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $estimadorinsumo = estimadorinsumo::findOrFail($id);
        return $estimadorinsumo;
        //return view('backEnd.estimadorinsumos.edit', compact('estimadorinsumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $estimadorinsumo = estimadorinsumo::findOrFail($id);
        $estimadorinsumo->update($request->all());

        Session::flash('message', 'estimadorinsumo updated!');
        Session::flash('status', 'success');
        return $estimadorinsumo;
        //return redirect('estimadorinsumos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $estimadorinsumo = estimadorinsumo::findOrFail($id);

        $estimadorinsumo->delete();

        Session::flash('message', 'estimadorinsumo deleted!');
        Session::flash('status', 'success');
        return $estimadorinsumo;
        //return redirect('estimadorinsumos');
    }

}
