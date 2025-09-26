<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];


    //Redundância para garantir que o valor que será armazenado no banco para a coluna de items seja um array vazio, caso passe algo diferente pelo controller
    protected $attributes = [
        'items' => '[]',
    ];

    // Mutator para garantir array sempre na coluna items
    public function getItemsAttribute($value)
    {
        return $value ? json_decode($value, true) : [];
    }
}
