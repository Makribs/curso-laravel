<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Kauan";
    $idade = 21;
    $arr = [11,22,33,44,55];
    $nomes = ["Kauan", "Pedro", "Maria", "João"];

    return view('welcome', 
        [
            'name' => $nome,
            'age' => $idade, 
            'occupation' => 'programmer',
            'arr' => $arr,
            'names' => $nomes,
        ]);
    // É possível passar várias variáveis para a view, mesmo de forma "crua/sem declarar", como em "profissao".
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {

    $busca = request('search');

    return view('products', ['search' => $busca]);
});

Route::get('/products_test/{id?}', function ($id = null) {
    return view('product', ['id' => $id]);
});