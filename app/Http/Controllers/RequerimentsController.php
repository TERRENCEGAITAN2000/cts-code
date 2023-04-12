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

class RequerimentsController extends Controller
{
    public function index(){
        $requeriments = Requeriment::all();
        return view('requeriments.index',compact('requeriments'));
    }
    public function create(){
        return view('requeriments.create');
    } 
    public function store(Request $request){
        Requeriment::create($request->all());
        return redirect()->route('requerimientos');
    }
    public function destroy($id){
        Requeriment::find($id)->delete();
        return redirect()->route('requerimientos');
    }
    public function show($id){
        $requeriment = Requeriment::find($id);
        return view('requeriments.show', compact('requeriment'));
    }
    public function edit($id){
        $requeriments = Requeriment::find($id);
        return view('requeriments.edit', compact('requeriments'));
    }
    //acutalizar info
    // id
    public function update(Request $request, $id){
        $requeriment = Requeriment::find($id)->update($request->all());
        return redirect()->route('requerimientos');
    }
}
