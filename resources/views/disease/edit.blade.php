@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Editar Enfermedad</div>

                    <div class="panel-body">
                        @include('flash::message')

                        {!! Form::model($disease, [ 'route' => ['diseases.update',$disease->id], 'method'=>'PUT']) !!}

                        <div class="form-group">
                            {!! Form::label('nombre', 'Nombre de la enfermedad') !!}
                            {!! Form::text('nombre',$disease->nombre,['class'=>'form-control', 'required', 'autofocus']) !!}
                        </div>
                        <div class="form-group">
                            {!!Form::label('especialidad_id', 'Especialidad') !!}
                            <br>
                            {!! Form::select('especialidad_id', $especialidades, $disease->especialidad, ['class' => 'form-control', 'required']) !!}
                        </div>
                        {!! Form::submit('Guardar',['class'=>'btn-primary btn']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection