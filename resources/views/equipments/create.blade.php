<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	<title>CREAR EQUIPO</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg naveg-bar">
		<a class="navbar-brand" href="{{ route('equipos')}}"><img class="imagen-circular" src="{{asset('img/logo.jpeg')}}"></a>
            <div class="ml-auto">
            <a href="{{ route('usuarios')}}" class="btn btn-link">USUARIOS</a>
            <a href="{{ route('clientes')}}" class="btn btn-link">CLIENTES</a>
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
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h1>REGISTRAR NUEVO EQUIPO</h1>
                        <form action="{{ route('equipos.store')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">MARCA</label>
                                <input type="text" class="form-control" name="mark">
                            </div>
                            <div class="form-group">
                                <label for="">MODELO</label>
                                <input type="text" class="form-control" name="model">
                            </div>
                            <div class="form-group">
                                <label for="">SERIAL</label>
                                <input type="text" class="form-control" name="serial">
                            </div>
                            <div class="form-group">
                                <label for="">TAMAÑO DISCO</label>
                                <input type="text" class="form-control" name="size_disk">
                            </div>
                            <div class="form-group">
                                <label for="">TIPO DISCO</label>
                                <input type="text" class="form-control" name="type_disk">
                            </div>
                            <div class="form-group">
                                <label for="">RAM</label>
                                <input type="text" class="form-control" name="ram">
                            </div>
                            <div class="form-group">
                                <label for="">PROCESADOR</label>
                                <input type="text" class="form-control" name="processor">
                            </div>
                            <div class="form-group">
                                <label for="">SISTEMA OPERATIVO</label>
                                <input type="text" class="form-control" name="operanting_system">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS USB</label>
                                <input type="text" class="form-control" name="usb_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS AUDIO</label>
                                <input type="text" class="form-control" name="audio_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS MICROFONO</label>
                                <input type="text" class="form-control" name="microphone_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS HDMI</label>
                                <input type="text" class="form-control" name="hdmi_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS VGA</label>
                                <input type="text" class="form-control" name="vga_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS DVI</label>
                                <input type="text" class="form-control" name="dvi_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS SD</label>
                                <input type="text" class="form-control" name="sd_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS CD</label>
                                <input type="text" class="form-control" name="cd_ports">
                            </div>
                            <div class="form-group">
                                <label for="">PUERTOS PS2</label>
                                <input type="text" class="form-control" name="ps2_ports">
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">GUARDAR</button>
                            <a href= "{{route('equipos')}}" class="btn btn-link">CANCELAR</a>
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