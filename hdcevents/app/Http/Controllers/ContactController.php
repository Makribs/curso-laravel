<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contacts.index');
    }
    /*public function create(){
        return view('contacts.create');
    }
    public function read(){
        return view('contacts.read');
    }
    public function update(){
        return view('contacts.update');
    }
    public function delete(){
        return view('contacts.delete');
    }*/
}
