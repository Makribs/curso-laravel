<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller {
    public function index(){
        $nome = "Kauan";
        $idade = 21;
        $arr = [11,22,33,44,55];
        $nomes = ["Kauan", "Pedro", "Maria", "João"];

        return view('events.index', 
            [
                'name' => $nome,
                'age' => $idade, 
                'occupation' => 'programmer',
                'arr' => $arr,
                'names' => $nomes,
            ]);
        // É possível passar várias variáveis para a view, mesmo de forma "crua/sem declarar", como em "profissao".
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