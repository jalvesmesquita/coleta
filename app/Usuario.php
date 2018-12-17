<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';

    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'senha',
        'latitude',
        'longitude'
    ];

    public function Coleta()
    {
        return $this->belongsToMany('App\Coleta');
    }
}
