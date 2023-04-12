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

class StatusController extends Controller
{
    public function index(){
        $status = Status::all();
        return view('status.index',compact('status'));
    }
    public function create(){
        return view('status.create');
    }
    public function store(Request $request){
        Status::create($request->all());
        return redirect()->route('estado');
    }
    public function destroy($id){
        Status::find($id)->delete();
        return redirect()->route('estado');
    }
    public function show($id){
        $status = Status::find($id);
        return view('status.show', compact('status'));
    }
    public function edit($id){
        $status = Status::find($id);
        return view('status.edit', compact('status'));
    }
    public function update(Request $request, $id){
        $status = Status::find($id)->update($request->all());
        return redirect()->route('estado');
    }
}
