<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculum;
use App\Models\Equipment;
use App\Models\Requeriment;
use App\Models\Status;
use App\Models\Ticket;
use App\Models\User;
use App\Models\Client;
use App\Models\Login;

class TicketsController extends Controller
{
    public function index(){
        $tickets = Ticket::all();
        return view('tickets.index',compact('tickets'));
    }
    public function create(){
        return view('tickets.create');
    }
    public function store(Request $request){
        Ticket::create($request->all());
        return redirect()->route('tickete');
    }
    public function destroy($id){
        Ticket::find($id)->delete();
        return redirect()->route('tickete');
    }
    public function show($id){
        $ticket = Ticket::find($id);
        return view('tickets.show', compact('ticket'));
    }
    public function edit($id){
        $tickets = Ticket::find($id);
        return view('tickets.edit', compact('tickets'));
    }
    //acutalizar info
    // id
    public function update(Request $request, $id){
        $ticket = Ticket::find($id)->update($request->all());
        return redirect()->route('tickete');
    }
}
