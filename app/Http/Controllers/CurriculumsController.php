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

class CurriculumsController extends Controller
{
    public function index(){
        $curriculums = curriculum::all();
        return view('curriculums.index', compact('curriculums'));
    }
    //crear usuario
    public function create(){
        return view('curriculums.create');
    }
    // guardar informacion en la base de datos 
    public function store(Request $request){
        Curriculum::create($request->all());
        return redirect()->route('curriculums');
    }
    public function destroy($id){
        Curriculum::find($id)->delete();
        return redirect()->route('curriculums');
    }
    public function show($id){
        $curriculum = Curriculum::find($id);
        return view('curriculums.show',compact('curriculum'));
    }
    public function edit($id){
        $curriculum = Curriculum::find($id);
        return view('curriculums.edit',compact('curriculum'));
    }
    public function update(Request $request, $id){
        $curriculum = Curriculum::find($id)->update($request->all());
        return redirect()->route('curriculums');
    }
}
