<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    //
    protected $fillable = [
        'id',
        'pessoa_id',
        'ddd',
        'numero'
    ];

    protected $table = 'contatos';
}
