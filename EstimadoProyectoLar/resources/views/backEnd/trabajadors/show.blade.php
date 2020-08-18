@extends('backLayout.app')
@section('title')
Trabajador
@stop

@section('content')

    <h1>Trabajador</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Id</th><th>Nombre</th><th>Area</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $trabajador->id }}</td> <td> {{ $trabajador->id }} </td><td> {{ $trabajador->nombre }} </td><td> {{ $trabajador->area }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection