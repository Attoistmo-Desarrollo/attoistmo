@extends('backLayout.app')
@section('title')
Estimadorinsumo
@stop

@section('content')

    <h1>Estimadorinsumo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Id</th><th>Fecha</th><th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $estimadorinsumo->id }}</td> <td> {{ $estimadorinsumo->id }} </td><td> {{ $estimadorinsumo->Fecha }} </td><td> {{ $estimadorinsumo->nombre }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection