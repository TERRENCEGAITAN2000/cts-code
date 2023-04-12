<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\Equipment;
use App\Models\Requeriment;
use App\Models\Status;
use App\Models\Tickets;
use App\Models\User;
use App\Models\Client;
use App\Models\Login;

class EquipmentsController extends Controller
{
    //mostrar equipos
    public function index(){
        $equipments = Equipment::all();
        return view('equipments.index', compact('equipments'));
    }
    //crear usuario
    public function create(){
        return view('equipments.create');
    }
    // guardar informacion en la base de datos 
    public function store(Request $request){
        Equipment::create($request->all());
        return redirect()->route('equipos');
    }
    public function destroy($id){
        Equipment::find($id)->delete();
        return redirect()->route('equipos');
    }
    public function show($id){
        $equipment = Equipment::find($id);
        return view('equipments.show',compact('equipment'));
    }
    public function edit($id){
        $equipment = Equipment::find($id);
        return view('equipments.edit',compact('equipment'));
    }
    public function update(Request $request, $id){
        $equipment = Equipment::find($id)->update($request->all());
        return redirect()->route('equipos');
    }
}