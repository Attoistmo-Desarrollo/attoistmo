<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\cronograma;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;

class cronogramaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $cronograma = cronograma::all();

        // return view('backEnd.cronograma.index', compact('cronograma'));
        return $cronograma;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.cronograma.create');
        //return $cronograma;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        cronograma::create($request->all());

        Session::flash('message', 'cronograma added!');
        Session::flash('status', 'success');

        return redirect('cronograma');
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
        $cronograma = cronograma::findOrFail($id);

        // return view('backEnd.cronograma.show', compact('cronograma'));
        return $cronograma;
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
        $cronograma = cronograma::findOrFail($id);

        // return view('backEnd.cronograma.edit', compact('cronograma'));
        return $cronograma;
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
        
        $cronograma = cronograma::findOrFail($id);
        $cronograma->update($request->all());

        Session::flash('message', 'cronograma updated!');
        Session::flash('status', 'success');

        // return redirect('cronograma');
        return $cronograma;
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
        $cronograma = cronograma::findOrFail($id);

        $cronograma->delete();

        Session::flash('message', 'cronograma deleted!');
        Session::flash('status', 'success');

        // return redirect('cronograma');
        return $cronograma;
    }

}
