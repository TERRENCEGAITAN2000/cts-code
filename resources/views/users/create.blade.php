<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	<title>CREAR USUARIO</title>
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
            <div class="col-md-4 offset-md-4">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('usuarios.guardar')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">NOMBRES</label>
                                <input type="text" class="form-control" name="names">
                            </div>
                            <div class="form-group">
                                <label for="">APELLIDOS</label>
                                <input type="text" class="form-control" name="last_names">
                            </div>
                            <div class="form-group">
                                <label for="">CORREO</label>
                                <input type="text" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label for="">NUMERO DOCUMENTO</label>
                                <input type="text" class="form-control" name="num_doc">
                            </div>
                            <div class="form-group">
                                <label for="">NUMERO TELEFONO</label>
                                <input type="text" class="form-control" name="num_phone">
                            </div>
                            <div class="form-group">
                                <label for="">NOMBRE USUARIO</label>
                                <input type="text" class="form-control" name="user_name">
                            </div>
                            <div class="form-group">
                                <label for="">CONTRASEÑA</label>
                                <input type="password" class="password" name="password">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                            <a href="{{route('usuarios')}}" class="btn btn-link">Cancelar</a>
                        </form>
                    </div>
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