<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }
    public function create(){
        return view('products.create');
    }
    public function read(){
        return view('products.read');
    }
    public function update(){
        return view('products.update');
    }
    public function delete(){
        return view('products.delete');
    }
}
