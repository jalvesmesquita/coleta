<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $table = 'motoristas';

    protected $singular = 'motorista';
    protected $plural = 'motoristas';

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'nascimento',
        'sexo',
        'endereco',
        'telefone',
        'cnh'
    ];

    public function Coleta()
    {
        return $this->hasOne('App\Coleta');
    }
}
