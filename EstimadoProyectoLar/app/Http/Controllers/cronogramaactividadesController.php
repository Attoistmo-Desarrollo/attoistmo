<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\cronogramaactividade;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class cronogramaactividadesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cronogramaactividades = cronogramaactividade::all();

        // return view('backEnd.cronogramaactividades.index', compact('cronogramaactividades'));
        return $cronogramaactividades;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //return view('backEnd.cronogramaactividades.create');
        return $cronogramaactividades;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        cronogramaactividade::create($request->all());

        Session::flash('message', 'cronogramaactividade added!');
        Session::flash('status', 'success');

        return redirect('cronogramaactividades');
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
        $cronogramaactividade = cronogramaactividade::findOrFail($id);

        return $cronogramaactividade;
        // return view('backEnd.cronogramaactividades.show', compact('cronogramaactividade'));
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
        $cronogramaactividade = cronogramaactividade::findOrFail($id);

        // return view('backEnd.cronogramaactividades.edit', compact('cronogramaactividade'));
        return $cronogramaactividade;
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
        
        $cronogramaactividade = cronogramaactividade::findOrFail($id);
        $cronogramaactividade->update($request->all());

        Session::flash('message', 'cronogramaactividade updated!');
        Session::flash('status', 'success');

        // return redirect('cronogramaactividades');
        return $cronogramaactividade;
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
        $cronogramaactividade = cronogramaactividade::findOrFail($id);

        $cronogramaactividade->delete();

        Session::flash('message', 'cronogramaactividade deleted!');
        Session::flash('status', 'success');

        // return redirect('cronogramaactividades');
        return $cronogramaactividade;
    }

}
