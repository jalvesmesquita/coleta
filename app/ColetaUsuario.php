<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColetaUsuario extends Model
{
    protected $table = 'coleta_usuario';

    protected $fillable =  [
        'coleta_id',
        'usuario_id'
    ];

    public function Coleta()
    {
        return $this->belongsTo('App\Coleta');
    }

    public function Usuario()
    {
        return $this->belongsTo('App\Usuario');
    }
}
