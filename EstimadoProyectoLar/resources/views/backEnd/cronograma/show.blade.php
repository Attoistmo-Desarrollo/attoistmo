@extends('backLayout.app')
@section('title')
Cronograma
@stop

@section('content')

    <h1>Cronograma</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Actividad</th><th>Asignado</th><th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $cronograma->id }}</td> <td> {{ $cronograma->actividad }} </td><td> {{ $cronograma->asignado }} </td><td> {{ $cronograma->cantidad }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection