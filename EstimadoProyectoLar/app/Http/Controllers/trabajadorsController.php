<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\trabajador;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class trabajadorsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $trabajadors = trabajador::all();
        return $trabajadors;

        //return view('backEnd.trabajadors.index', compact('trabajadors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return view('backEnd.trabajadors.create');
        return $trabajadors;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        trabajador::create($request->all());

        Session::flash('message', 'trabajador added!');
        Session::flash('status', 'success');

        return redirect('trabajadors');
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
        $trabajador = trabajador::findOrFail($id);
        return $trabajador;
        //return view('backEnd.trabajadors.show', compact('trabajador'));
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
        $trabajador = trabajador::findOrFail($id);
        return $trabajador;
        //return view('backEnd.trabajadors.edit', compact('trabajador'));
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
        
        $trabajador = trabajador::findOrFail($id);
        $trabajador->update($request->all());

        Session::flash('message', 'trabajador updated!');
        Session::flash('status', 'success');
        return $trabajador;
        //return redirect('trabajadors');
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
        $trabajador = trabajador::findOrFail($id);

        $trabajador->delete();

        Session::flash('message', 'trabajador deleted!');
        Session::flash('status', 'success');
        return $trabajador;
        //return redirect('trabajadors');
    }

}
