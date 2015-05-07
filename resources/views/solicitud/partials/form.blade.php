<div class="container">
	<div class=" row form-group col-md-offset-8 col-md-4">
		<h3>{!! Form::label('text','Folio: ',['class' => 'col-md-4 control-label']) !!}</h3>
			{!! Form::text('Domicilio', null, ['class' => 'form-control floating-label', 'placeholder' => 'Escriba numero de Folio aquí']) !!}
	</div>
	<div class="row form-group col-md-6">
            <h3>{!! Form::label('text','Departamento: ',['class' => 'col-md-4 control-label']) !!}</h3>
			{!! Form::select('Departamento',
				['produccion' => 'Producción', 'laboratorio' => 'Laboratorio'],
				null,
				['class' => 'form-control floating-label', 'placeholder' => 'Seleccione departamento']
			) !!}
	</div>
	<div class="col-md-4"></div>
	<div class="row form-group col-md-12">
		<h3>{!! Form::label('text','Cliente: ',['class' => 'col-md-4 control-label']) !!}</h3>
			{!! Form::text('Cliente', null, ['class' => 'form-control floating-label', 'placeholder' => 'Escriba nombre del Cliente aquí']) !!}
	</div>
	<div class="row form-group col-md-12">
		<h3>{!! Form::label('text','Domicilio: ',['class' => 'col-md-4 control-label']) !!}</h3>
			{!! Form::text('Domicilio', null, ['class' => 'form-control floating-label', 'placeholder' => 'Escriba domicilio del Cliente aquí']) !!}
	</div>
</div>
	<br><br>
<div class="container">
	<h3>Detalles del Pedido</h3>
	<div class="panel panel-default">
		<div class="row panel-heading">
			<div class="col-md-3">
				Cantidad
			</div>
			<div class="col-md-6">
				Descripcion
			</div>
			<div class="col-md-3">
				Prioridad
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				{!! Form::text('Cantidad', null, ['class' => 'form-control floating-label']) !!}
			</div>
			<div class="col-md-6">
				{!! Form::text('Descripcion', null, ['class' => 'form-control floating-label']) !!}
			</div>
			<div class="col-md-3">
				{!! Form::text('Prioridad', null, ['class' => 'form-control floating-label']) !!}
			</div>
		</div>
	</div>
</div>
