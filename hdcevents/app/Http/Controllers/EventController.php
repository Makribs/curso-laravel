<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Aqui estou fazendo um acesso ao Models, mais especificamente no Model de Evento;
use App\Models\Event;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EventController extends Controller {
    public function index(){
        $search = request('search');

        if ($search) {
            $events = Event::Where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
            # code...
        } else {
            $events = Event::all();
        }
        return view('events.index', ['events' => $events, 'search' => $search]);
    }

    public function create(){
        return view('events.create');
    }
    
    public function store(Request $request){
        $event = new Event;
        $event->date = $request->date;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items ?? [];
        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);
            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = Auth::user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');
    }

    public function show($id){
        $event = Event::findOrFail($id); //Encontra o evento ou falha, mostrando um erro 404

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();
        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }

    public function dashboard(){
        $user = Auth::user();
        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);
    }
    public function update(){
        return view('events.update');
    }
    public function destroy($id){
        Event::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Event deleted successfully');
    }
}