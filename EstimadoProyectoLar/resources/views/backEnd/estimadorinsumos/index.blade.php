@extends('backLayout.app')
@section('title')
Estimadorinsumo
@stop

@section('content')

    <h1>Estimadorinsumos <a href="{{ url('estimadorinsumos/create') }}" class="btn btn-primary pull-right btn-sm">Add New Estimadorinsumo</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblestimadorinsumos">
            <thead>
                <tr>
                    <th>ID</th><th>Id</th><th>Fecha</th><th>Nombre</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($estimadorinsumos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('estimadorinsumos', $item->id) }}">{{ $item->id }}</a></td><td>{{ $item->Fecha }}</td><td>{{ $item->nombre }}</td>
                    <td>
                        <a href="{{ url('estimadorinsumos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['estimadorinsumos', $item->id],
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
        $('#tblestimadorinsumos').DataTable({
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