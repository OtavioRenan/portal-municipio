<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'data_nacimento',
        'cargo_id',
        'contato_id',
        'cpf',
        'endereco_id'
    ];

    protected $table = 'pessoas';
}
