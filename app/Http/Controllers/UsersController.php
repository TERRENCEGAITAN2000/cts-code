<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\Equipment;
use App\Models\Requeriment;
use App\Models\Status;
use App\Models\Tickets;
use App\Models\Client;
use App\Models\User;
use App\Models\Login;

class UsersController extends Controller
{
    public function index(){
        $users = User::all();
        //return $users;
        return view('users.index',compact('users'));
    }
    public function create(){
        return view('users.create');
    } 
    public function store(Request $request){
        User::create($request->all());
        return redirect()->route('usuarios');
    }
    public function destroy($id){
        User::find($id)->delete();
        return redirect()->route('usuarios');
    }
    public function show($id){
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
    public function edit($id){
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }
    //acutalizar info
    // id
    public function update(Request $request, $id){
        $user = User::find($id)->update($request->all());
        return redirect()->route('usuarios');
    }
}
