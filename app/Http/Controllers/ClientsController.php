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

class ClientsController extends Controller
{
    public function index(){
        $clients = Client::all();
        //return $users;
        return view('clients.index',compact('clients'));
    }
    public function create(){
        return view('clients.create');
    } 
    public function store(Request $request){
        Client::create($request->all());
        return redirect()->route('clientes');
    }
    public function destroy($id){
        Client::find($id)->delete();
        return redirect()->route('clientes');
    }
    public function show($id){
        $client = Client::find($id);
        return view('clients.show', compact('client'));
    }
    public function edit($id){
        $client = Client::find($id);
        return view('clients.edit', compact('client'));
    }
    public function update(Request $request, $id){
        $client = Client::find($id)->update($request->all());
        return redirect()->route('clientes');
    }
}
