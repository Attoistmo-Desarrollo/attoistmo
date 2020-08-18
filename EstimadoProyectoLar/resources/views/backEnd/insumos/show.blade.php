@extends('backLayout.app')
@section('title')
Insumo
@stop

@section('content')

    <h1>Insumo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Id</th><th>Nombre</th><th>Tipo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $insumo->id }}</td> <td> {{ $insumo->id }} </td><td> {{ $insumo->nombre }} </td><td> {{ $insumo->tipo }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection