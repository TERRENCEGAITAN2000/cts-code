<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	<title>CLIENTES</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg naveg-bar">
		<a class="navbar-brand" href="{{ route('equipos')}}"><img class="imagen-circular" src="{{asset('img/logo.jpeg')}}"></a>
            <div class="ml-auto">
            <a href="{{ route('usuarios')}}" class="btn btn-link">USUARIOS</a>
            <a href="{{ route('equipos')}}" class="btn btn-link">EQUIPOS</a>
            <a href="{{ route('requerimientos')}}" class="btn btn-link">REQUERIMIENTOS</a>
            <a href="{{ route('curriculums')}}" class="btn btn-link">CURRICULUM</a>
            <a href="{{ route('tickete')}}" class="btn btn-link">TICKETS</a>
            <a href="{{ route('estado')}}" class="btn btn-link">ESTADOS</a>
        </div>
		<div class="ml-auto">
			<button class="btn btn-outline-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ver perfil</button>
			<div class="dropdown-menu dropdown-menu-right">
				<a class="dropdown-item" href="#">Mi perfil</a>
				<a class="dropdown-item" href="#">Cambiar contraseña</a>
				<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar sesión</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
				</form>
			</div>
		</div>
	</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('clientes.crear')}}" class="btn btn-primary mt-5 ">CREAR NUEVO CLIENTE </a>
                <div class="table-responsive mt-5 ">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>NOMBRES</td>
                                <td>APELLIDOS</td>
                                <td>CORREO</td>
                                <td>DIRECCION</td>
                                <td>EMPRESA</td>
                                <td>ACCION</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <td>{{$client->names}}</td>
                                    <td>{{$client->last_names}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->address}}</td>
                                    <td>{{$client->company}}</td>
                                    <td>
                                        <form action="{{route ('clientes.delete', $client->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <a href="{{route('clientes.show',$client->id)}}" class=" btn btn-sm btn-info">Detalles</a>
                                            <a href="{{route ('clientes.edit',$client->id)}}" class=" btn btn-sm btn-warning">Editar</a>
                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Agregamos los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>