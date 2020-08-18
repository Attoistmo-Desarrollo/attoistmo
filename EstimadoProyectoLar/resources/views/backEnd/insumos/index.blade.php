@extends('backLayout.app')
@section('title')
Insumo
@stop

@section('content')

    <h1>Insumos <a href="{{ url('insumos/create') }}" class="btn btn-primary pull-right btn-sm">Add New Insumo</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblinsumos">
            <thead>
                <tr>
                    <th>ID</th><th>Id</th><th>Nombre</th><th>Tipo</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($insumos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('insumos', $item->id) }}">{{ $item->id }}</a></td><td>{{ $item->nombre }}</td><td>{{ $item->tipo }}</td>
                    <td>
                        <a href="{{ url('insumos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['insumos', $item->id],
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
        $('#tblinsumos').DataTable({
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