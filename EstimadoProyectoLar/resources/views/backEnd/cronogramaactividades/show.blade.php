@extends('backLayout.app')
@section('title')
Cronogramaactividade
@stop

@section('content')

    <h1>Cronogramaactividade</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Actividad</th><th>Asignado</th><th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cronogramaactividade->id }}</td> <td> {{ $cronogramaactividade->actividad }} </td><td> {{ $cronogramaactividade->asignado }} </td><td> {{ $cronogramaactividade->cantidad }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection