@extends('backLayout.app')
@section('title')
Cronogramaactividade
@stop

@section('content')

    <h1>Cronogramaactividades <a href="{{ url('cronogramaactividades/create') }}" class="btn btn-primary pull-right btn-sm">Add New Cronogramaactividade</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcronogramaactividades">
            <thead>
                <tr>
                    <th>ID</th><th>Actividad</th><th>Asignado</th><th>Cantidad</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cronogramaactividades as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('cronogramaactividades', $item->id) }}">{{ $item->actividad }}</a></td><td>{{ $item->asignado }}</td><td>{{ $item->cantidad }}</td>
                    <td>
                        <a href="{{ url('cronogramaactividades/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['cronogramaactividades', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblcronogramaactividades').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection