<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\insumo;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class insumosController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $insumos = insumo::all();
        return $insumos;
        //return view('backEnd.insumos.index', compact('insumos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return $insumos;
        //return view('backEnd.insumos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        insumo::create($request->all());

        Session::flash('message', 'insumo added!');
        Session::flash('status', 'success');

        return redirect('insumos');
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
        $insumo = insumo::findOrFail($id);
        return $insumo;
        //return view('backEnd.insumos.show', compact('insumo'));
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
        $insumo = insumo::findOrFail($id);
        return $insumo;
        //return view('backEnd.insumos.edit', compact('insumo'));
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
        
        $insumo = insumo::findOrFail($id);
        $insumo->update($request->all());

        Session::flash('message', 'insumo updated!');
        Session::flash('status', 'success');
        return $insumo;
        //return redirect('insumos');
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
        $insumo = insumo::findOrFail($id);

        $insumo->delete();

        Session::flash('message', 'insumo deleted!');
        Session::flash('status', 'success');
        return $insumo;
        //return redirect('insumos');
    }

}
