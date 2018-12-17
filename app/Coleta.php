<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
    protected $table = 'coleta';

    protected $fillable = [
        'motorista_id',
        'ajudante_id',
        'veiculo_id',
        'data',
        'quantidade',
        'observacao'
    ];

    public function Motorista()
    {
        return $this->belongsTo('App\Motorista');
    }

    public function Ajudante()
    {
        return $this->belongsTo('App\Ajudante');
    }

    public function Veiculo()
    {
        return $this->belongsTo('App\Veiculo');
    }

    public function Usuario()
    {
        return $this->belongsToMany('App\Usuario');
    }
}
