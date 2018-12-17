<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $table = "veiculos";

    protected $singular = 'veiculo';
    protected $plural = 'veiculos';

    protected $fillable = [
        'tipo',
        'cubagem',
        'placa'
    ];
}
