<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'contato_id'
    ];

    protected $table = 'secretarias';
}
