
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<form method="POST" class="form-horizontal" action="{{route('app.firemans.create')}}">
	{!! csrf_field() !!}
	<div class="panel panel-default">
		<div class="panel-heading">
			Registrar bombero
		</div>
		<div class="panel-body">
			<div class="form-group">
				<label for="name" class="col-sm-2 col-sm-offset-2">Nombre</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="name" placeholder="Name" name="name">
				</div>
			</div>

			<div class="form-group">
				<label for="last_name" class="col-sm-2 col-sm-offset-2">Apellido</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="last_name" placeholder="Last name" name="last_name">
				</div>
			</div>

			<div class="form-group">
				<label for="email" class="col-sm-2 col-sm-offset-2">Email</label>
				<div class="col-sm-6">
					<input type="email" class="form-control" id="email" placeholder="Email" name="email">
				</div>
			</div>

			<div class="form-group">
				<label for="password" class="col-sm-2 col-sm-offset-2">Contraseña</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="password" name="password">
				</div>
			</div>

			<div class="form-group">
				<label for="password_confirmation" class="col-sm-2 col-sm-offset-2">Confirmar contraseña</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-6">
					<button type="submit" class="btn btn-default">Registro</button>
				</div>
			</div>
		</div>
	</div>
</form>