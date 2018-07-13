<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'id',
        'estado',
        'cidade',
        'rua',
        'numero',
        'complemento'
    ];

    protected $table = 'enderecos';
}
