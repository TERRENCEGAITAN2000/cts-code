<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	<title>EDITAR USUARIO</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg naveg-bar">
		<a class="navbar-brand" href="{{ route('equipos')}}"><img class="imagen-circular" src="{{asset('img/logo.jpeg')}}"></a>
            <div class="ml-auto">
            <a href="{{ route('clientes')}}" class="btn btn-link">CLIENTES</a>
            <a href="{{ route('equipos')}}" class="btn btn-link">EQUIPOS</a>
            <a href="{{ route('requerimientos')}}" class="btn btn-link">REQUERIMIENTOS</a>
            <a href="{{ route('curriculums')}}" class="btn btn-link">CURRICULUM</a>
            <a href="" class="btn btn-link">TICKETS</a>
            <a href="" class="btn btn-link">ESTADOS</a>
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
            <div class="col-md-6 offset-md-3">
                <form action="{{route('usuarios.update', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <table class="table table-sm table-striped table-hover">
                        <thead>
                            <tr>
                                <th>NOMBRES</th>
                                <th><input type="text" class="form-control" name="names" value="{{$user->names}}"></th>
                            </tr>
                            <tr>
                                <th>APELLIDOS</th>
                                <th><input type="text" class="form-control" name="last_names" value="{{$user->last_names}}"></th>
                            </tr>
                            <tr>
                                <th>CORREO</th>
                                <th><input type="text" class="form-control" name="email" value="{{$user->email}}"></th>
                            </tr>
                            <tr>
                                <th>NUMERO DOCUMENTO</th>
                                <th><input type="text" class="form-control" name="num_doc" value="{{$user->num_doc}}"></th>
                            </tr>
                            <tr>
                                <th>NUMERO DE TELEFONO</th>
                                <th><input type="text" class="form-control" name="num_phone" value="{{$user->num_phone}}"></th>
                            </tr>
                            <tr>
                                <th>NOMBRE DE USUARIO</th>
                                <th><input type="text" class="form-control" name="user_name" value="{{$user->user_name}}"></th>
                            </tr>
                            <tr>
                                <th>CONTRASEÑA</th>
                                <th><input type="password" class="password" name="password" value="{{$user->password}}"></th>
                            </tr>
                            <tr>
                                <th colspan="2"><button class="btn btn-primary w-100">Actualizar info</button></th>
                            </tr>
                            <tr>
                                <th colspan="2"><a href="{{route('usuarios')}}" class="btn btn-link w-100">Cancelar</a></th>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <!-- Agregamos los scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
	