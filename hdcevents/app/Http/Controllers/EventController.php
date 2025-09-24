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
    public function store(Request $request){
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
            $event->items = $request->items;
        }
       
        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }
    public function show($id){
        $event = Event::findOrFail($id); //Encontra o evento ou falha, mostrando um erro 404
        return view('events.show', ['event' => $event]);
    }

    public function update(){
        return view('events.update');
    }
    public function delete(){
        return view('events.delete');
    }
}