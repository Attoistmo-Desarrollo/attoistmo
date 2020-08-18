@extends('backLayout.app')
@section('title')
Trabajador
@stop

@section('content')

    <h1>Trabajadors <a href="{{ url('trabajadors/create') }}" class="btn btn-primary pull-right btn-sm">Add New Trabajador</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbltrabajadors">
            <thead>
                <tr>
                    <th>ID</th><th>Id</th><th>Nombre</th><th>Area</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($trabajadors as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('trabajadors', $item->id) }}">{{ $item->id }}</a></td><td>{{ $item->nombre }}</td><td>{{ $item->area }}</td>
                    <td>
                        <a href="{{ url('trabajadors/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['trabajadors', $item->id],
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
        $('#tbltrabajadors').DataTable({
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