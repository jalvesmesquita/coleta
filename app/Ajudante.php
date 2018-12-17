<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajudante extends Model
{
    protected $table = "ajudantes";

    protected $singular = 'ajudante';
    protected $plural = 'ajudantes';

    protected $fillable = [
        'nome',
        'rg',
        'cpf',
        'nascimento',
        'telefone',
        'email'
    ];
}