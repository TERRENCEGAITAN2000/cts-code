<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	<title>DETALLES EQUIPO</title>
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
			<div class="col-md-12">
                <table class="table">
                    <tr>
                        <th>MARCA</th>
                        <td>{{ $equipment->mark}}</td>
                    </tr>
                    <tr>
                        <th>MODELO</th>
                        <td>{{ $equipment->model}}</td>
                    </tr>
                    <tr>
                        <th>SERIAL</th>
                        <td>{{ $equipment->serial}}</td>
                    </tr>
                    <tr>
                        <th>TAMAÑO DISCO</th>
                        <td>{{ $equipment->size_disk}}</td>
                    </tr>
                    <tr>
                        <th>TIPO DISCO</th>
                        <td>{{ $equipment->type_disk}}</td>
                    </tr>
                    <tr>
                        <th>RAM</th>
                        <td>{{ $equipment->ram}}</td>
                    </tr>
                    <tr>
                        <th>PROCESADOR</th>
                        <td>{{ $equipment->processor}}</td>
                    </tr>
                    <tr>
                        <th>SISTEMA OPERATIVO</th>
                        <td>{{ $equipment->operating_system}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS USB</th>
                        <td>{{ $equipment->usb_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DE AUDIO</th>
                        <td>{{ $equipment->audio_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DE MICROFONO</th>
                        <td>{{ $equipment->microphone_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS HDMI</th>
                        <td>{{ $equipment->hdmi_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS VGA</th>
                        <td>{{ $equipment->vga_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS DVI</th>
                        <td>{{ $equipment->dvi_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS SD</th>
                        <td>{{ $equipment->sd_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS CD</th>
                        <td>{{ $equipment->cd_ports}}</td>
                    </tr>
                    <tr>
                        <th>PUERTOS PS2</th>
                        <td>{{ $equipment->ps2_ports}}</td>
                    </tr>
                </table>
                <hr>
                <tr>
                    <th colspan="2"><a href= "{{route('equipos')}}" class="btn btn-primary w-30">INICIO</a></th>
                    <td colspan="2"><a href="{{route('equipos.edit', $equipment->id)}}" class="btn btn-link w-30">EDITAR</a></td>
                </tr>
                <hr>
			</div>
        </div>
    </div>
    <!-- Agregamos los scripts de Bootstrap -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>