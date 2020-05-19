@extends('users.layout')
@section('content')
@section('header', 'Creación de Clientes')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nuevo Cliente</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('cliente.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="Nombre">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="ap" id="ap" class="form-control input-sm" placeholder="Apellido paterno">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="am" id="am" class="form-control input-sm" placeholder="Apellido materno">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="sexo" id="sexo" class="form-control input-sm" placeholder="Sexo">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="telefono" id="telefono" class="form-control input-sm" placeholder="Teléfono">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="correo" id="correo" class="form-control input-sm" placeholder="Correo electrónico">
									</div>
								</div>
							</div>
							<div class="form-group">
								<textarea name="direccion" class="form-control input-sm" placeholder="Dirección"></textarea>
							</div>
							<div class="row">
							
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="ecivil" id="ecivil" class="form-control input-sm" placeholder="Estado civil">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="institucion" id="precio" class="form-control input-sm" placeholder="Institución">
									</div>
								</div>
							</div>
							<div class="row">
 
								<div class="col-xs-3 col-sm-3 col-md-3">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('cliente.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection