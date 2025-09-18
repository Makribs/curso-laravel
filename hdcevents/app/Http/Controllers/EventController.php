<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Aqui estou fazendo um acesso ao Models, mais especificamente no Model de Evento;
use App\Models\Event;

class EventController extends Controller {
    public function index(){
        $events = Event::all();

        return view('events.index', ['events' => $events]);
    }

    public function create(){
        return view('events.create');
    }
    public function read(){
        return view('events.read');
    }
    public function update(){
        return view('events.update');
    }
    public function delete(){
        return view('events.delete');
    }
}