@extends('backLayout.app')
@section('title')
Edit Cronogramaactividade
@stop

@section('content')

    <h1>Edit Cronogramaactividade</h1>
    <hr/>

    {!! Form::model($cronogramaactividade, [
        'method' => 'PATCH',
        'url' => ['cronogramaactividades', $cronogramaactividade->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('actividad') ? 'has-error' : ''}}">
                {!! Form::label('actividad', 'Actividad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('actividad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('actividad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('asignado') ? 'has-error' : ''}}">
                {!! Form::label('asignado', 'Asignado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('asignado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('asignado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('cantidad') ? 'has-error' : ''}}">
                {!! Form::label('cantidad', 'Cantidad: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('cantidad', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('tiempofase') ? 'has-error' : ''}}">
                {!! Form::label('tiempofase', 'Tiempofase: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::input('time', 'tiempofase', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('tiempofase', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
                {!! Form::label('estado', 'Estado: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('fechaentrega') ? 'has-error' : ''}}">
                {!! Form::label('fechaentrega', 'Fechaentrega: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('fechaentrega', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('fechaentrega', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection