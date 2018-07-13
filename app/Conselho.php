<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conselho extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'pessoa_id'
    ];

    protected $table = 'conselhos';
}
