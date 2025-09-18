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

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produtos', function () {
    return view('produtos');
});
