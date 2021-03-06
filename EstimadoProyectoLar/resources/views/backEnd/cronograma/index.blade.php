@extends('backLayout.app')
@section('title')
Cronograma
@stop

@section('content')

    <h1>Cronograma <a href="{{ url('cronograma/create') }}" class="btn btn-primary pull-right btn-sm">Add New Cronograma</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcronograma">
            <thead>
                <tr>
                    <th>ID</th><th>Actividad</th><th>Asignado</th><th>Cantidad</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cronograma as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('cronograma', $item->id) }}">{{ $item->actividad }}</a></td><td>{{ $item->asignado }}</td><td>{{ $item->cantidad }}</td>
                    <td>
                        <a href="{{ url('cronograma/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['cronograma', $item->id],
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
        $('#tblcronograma').DataTable({
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