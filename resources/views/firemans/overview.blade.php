<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<div class="panel panel-default col-lg-6 col-lg-offset-3">
	<div class="panel-heading">
		Lista de bomberos
	</div>

	<div class="panel-body">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$user->name}}</td>
						<td>{{$user->last_name}}</td>
						<td>{{$user->email}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>