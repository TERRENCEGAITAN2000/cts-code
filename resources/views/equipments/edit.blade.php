<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
	<title>EDITAR EQUIPO</title>
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
                    <form action="{{route('equipos.update' , $equipment->id)}}" method="post">
                        @method('PUT')
                        @csrf
                        <table class="table table-sm table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>MARCA</th>
                                    <th><input type="text" class="form-control" name="mark" value="{{$equipment->mark}}"></th>
                                </tr>
                                <tr>
                                    <th>MODELO</th>
                                    <td><input type="text" class="form-control" name="model" value="{{$equipment->model}}"></td>
                                </tr>
                                <tr>
                                    <th>SERIAL</th>
                                    <td><input type="text" class="form-control" name="serial" value="{{$equipment->serial}}"></td>
                                </tr>
                                <tr>
                                    <th>TAMAÑO DISCO</th>
                                    <td><input type="text" class="form-control" name="size_disk" value="{{$equipment->size_disk}}"></td>
                                </tr>
                                <tr>
                                    <th>TIPO DISCO</th>
                                    <td><input type="text" class="form-control" name="type_disk" value="{{$equipment->type_disk}}"></td>
                                </tr>
                                <tr>
                                    <th>RAM</th>
                                    <td><input type="text" class="form-control" name="ram" value="{{$equipment->ram}}"></td>
                                </tr>
                                <tr>
                                    <th>PROCESADOR</th>
                                    <td><input type="text" class="form-control" name="processor" value="{{$equipment->processor}}"></td>
                                </tr>
                                <tr>
                                    <th>SISTEMA OPERATIVO</th>
                                    <td><input type="text" class="form-control" name="operating_system" value="{{$equipment->operating_system}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS USB</th>
                                    <td><input type="text" class="form-control" name="usb_ports" value="{{$equipment->usb_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS AUDIO</th>
                                    <td><input type="text" class="form-control" name="audio_ports" value="{{$equipment->audio_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS MICROFONO</th>
                                    <td><input type="text" class="form-control" name="microphone_ports" value="{{$equipment->microphone_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS HDMI</th>
                                    <td><input type="text" class="form-control" name="hdmi_ports" value="{{$equipment->hdmi_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS VGA</th>
                                    <td><input type="text" class="form-control" name="vga_ports" value="{{$equipment->vga_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS DVI</th>
                                    <td><input type="text" class="form-control" name="dvi_ports" value="{{$equipment->dvi_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS SD</th>
                                    <td><input type="text" class="form-control" name="sd_ports" value="{{$equipment->sd_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS CD</th>
                                    <td><input type="text" class="form-control" name="cd_ports" value="{{$equipment->cd_ports}}"></td>
                                </tr>
                                <tr>
                                    <th>PUERTOS PS2</th>
                                    <td><input type="text" class="form-control" name="ps2_ports" value="{{$equipment->ps2_ports}}"></td>
                                </tr>
                                <tr>
                                    <th colspan="2"><button class="btn btn-primary w-100">ACTUALIZAR</button></th>
                                </tr>
                                <tr>
                                    <th colspan="2"><a href= "{{route('equipos')}}" class="btn btn-link w-100">INICIO</a></th>
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