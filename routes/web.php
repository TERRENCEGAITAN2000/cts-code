<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CurriculumsController;
use App\Http\Controllers\EquipmentsController;
use App\Http\Controllers\RequerimentsController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\ClientsController;

//
// EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS EQUIPOS  
//
//Listado de equipos
Route::get('equipos',[EquipmentsController::class, 'index'])->name('equipos');
//Formulario de crear
Route::get('equipos/crear',[EquipmentsController::class, 'create'])->name('equipos.crear');
//Guardar formulario
Route::post('equipos',[EquipmentsController::class, 'store'])->name('equipos.store');
//Eliminar un registro
Route::delete('equipos/{id}',[EquipmentsController::class,'destroy'])->name('equipos.delete');
//Detalles equipo
Route::get('equipos/{id}', [EquipmentsController::class,'show'])->name('equipos.show');
//Editar equipo
Route::get('equipos/{id}/editar',[EquipmentsController::class,'edit'])->name('equipos.edit');
//Actualizar
Route::put('equipos/{id}/',[EquipmentsController::class,'update'])->name('equipos.update');
//
//USUARIOS USUARIOS USUARIOS USUARIOS USUARIOS USUARIOS USUARIOS USUARIOS USUARIOS USUARIOS USUARIOS
//
//listar usuario
Route::get('usuarios',[UsersController::class, 'index'])->name('usuarios');
//crear usuario
Route::get('usuarios/crear',[UsersController::class, 'create'])->name('usuarios.crear');
//Guardar usuario
Route::post('usuarios',[UsersController::class, 'store'])->name('usuarios.guardar');
//Eliminar un usuario
Route::delete('usuarios/{id}',[UsersController::class,'destroy'])->name('usuarios.delete');
//Detalles usuario
Route::get('usuarios/{id}',[UsersController::class,'show'])->name('usuarios.show');
// Editar usuario 
Route::get('usuarios/{id}/editar',[UsersController::class,'edit'])->name('usuarios.edit');
// Actualizar
Route::PUT('usuarios/{id}',[UsersController::class,'update'])->name('usuarios.update');
//
//CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES CLIENTES 
//
//listar cliente
Route::get('clientes',[ClientsController::class, 'index'])->name('clientes');
//crear usuario
Route::get('clientes/crear',[ClientsController::class, 'create'])->name('clientes.crear');
//Guardar usuario
Route::post('clientes',[ClientsController::class, 'store'])->name('clientes.guardar');
//Eliminar un usuario
Route::delete('clientes/{id}',[ClientsController::class,'destroy'])->name('clientes.delete');
//Detalles usuario
Route::get('clientes/{id}',[ClientsController::class,'show'])->name('clientes.show');
// Editar usuario 
Route::get('clientes/{id}/editar',[ClientsController::class,'edit'])->name('clientes.edit');
// Actualizar
Route::PUT('clientes/{id}',[ClientsController::class,'update'])->name('clientes.update');
//
// curriculums curriculums curriculums curriculums curriculums curriculums curriculums curriculums
//
//Listar curriculums
Route::get('curriculums',[CurriculumsController::class, 'index'])->name('curriculums');
//crear usuario
Route::get('curriculums/crear',[CurriculumsController::class, 'create'])->name('curriculums.crear');
//Guardar usuario
Route::post('curriculums',[CurriculumsController::class, 'store'])->name('curriculums.guardar');
//Eliminar un usuario
Route::delete('curriculums/{id}',[CurriculumsController::class,'destroy'])->name('curriculums.delete');
//Detalles usuario
Route::get('curriculums/{id}',[CurriculumsController::class,'show'])->name('curriculums.show');
// Editar usuario 
Route::get('curriculums/{id}/editar',[CurriculumsController::class,'edit'])->name('curriculums.edit');
// Actualizar
Route::PUT('curriculums/{id}',[CurriculumsController::class,'update'])->name('curriculums.update');
//
//REQUERIMIENTOS REQUERIMIENTOS REQUERIMIENTOS REQUERIMIENTOS REQUERIMIENTOS REQUERIMIENTOS REQUERIMIENTOS REQUERIMIENTOS
//Listar Requerimientos
Route::get('requerimientos',[RequerimentsController::class, 'index'])->name('requerimientos');
//crear usuario
Route::get('requerimientos/crear',[RequerimentsController::class, 'create'])->name('requerimientos.crear');
//Guardar usuario
Route::post('requerimientos',[RequerimentsController::class, 'store'])->name('requerimientos.guardar');
//Eliminar un usuario
Route::delete('requerimientos/{id}',[RequerimentsController::class,'destroy'])->name('requerimientos.delete');
//Detalles usuario
Route::get('requerimientos/{id}',[RequerimentsController::class,'show'])->name('requerimientos.show');
// Editar usuario 
Route::get('requerimientos/{id}/editar',[RequerimentsController::class,'edit'])->name('requerimientos.edit');
// Actualizar
Route::PUT('requerimientos/{id}',[RequerimentsController::class,'update'])->name('requerimientos.update');
//
//STATUS
//
//listar cliente
Route::get('estado',[StatusController::class, 'index'])->name('estado');
//crear usuario
Route::get('estado/crear',[StatusController::class, 'create'])->name('estado.crear');
//Guardar usuario
Route::post('estado',[StatusController::class, 'store'])->name('estado.guardar');
//Eliminar un usuario
Route::delete('estado/{id}',[StatusController::class,'destroy'])->name('estado.delete');
//Detalles usuario
Route::get('estado/{id}',[StatusController::class,'show'])->name('estado.show');
// Editar usuario 
Route::get('estado/{id}/editar',[StatusController::class,'edit'])->name('estado.edit');
// Actualizar
Route::PUT('estado/{id}',[StatusController::class,'update'])->name('estado.update');
//
//
//TICKETS
//
//listar cliente
Route::get('tickete',[TicketsController::class, 'index'])->name('tickete');
//crear usuario
Route::get('tickete/crear',[TicketsController::class, 'create'])->name('tickete.crear');
//Guardar usuario
Route::post('tickete',[TicketsController::class, 'store'])->name('tickete.guardar');
//Eliminar un usuario
Route::delete('tickete/{id}',[TicketsController::class,'destroy'])->name('tickete.delete');
//Detalles usuario
Route::get('tickete/{id}',[TicketsController::class,'show'])->name('tickete.show');
// Editar usuario 
Route::get('tickete/{id}/editar',[TicketsController::class,'edit'])->name('tickete.edit');
// Actualizar
Route::PUT('tickete/{id}',[TicketsController::class,'update'])->name('tickete.update');
//
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
