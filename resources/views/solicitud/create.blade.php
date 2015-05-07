@extends('app')

@section('content')

	<h1>Nueva Solicitud de Fabricación de Material</h1>
	<br><br>
	{!! Form::open(['route' => 'solicitud.store' ]) !!}
	
		@include('solicitud.partials.form')
		<br>
		<div class="form-group">
			 <div class="form-group">
                <button class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
		</div>
		


	{!! Form::close() !!}
@endsection