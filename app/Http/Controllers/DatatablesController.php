<?php

namespace App\Http\Controllers;

use App\Ajudante;
use App\Coleta;
use App\Motorista;
use App\Usuario;
use App\Veiculo;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    /*
     * Retorna lista com todos os motoristas
     */
    public function anyData()
    {
        return Datatables::of(Motorista::query())
            ->addColumn('action', function ($motorista) {
                $url = action('MotoristasController@edit', ['id' => $motorista->id]);
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>';
            })->make(true);
    }

    public function veiculosAnyData()
    {
        return Datatables::of(Veiculo::query())
            ->addColumn('action', function ($veiculo) {
                $url = action('VeiculosController@edit', ['id' => $veiculo->id]);
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>';
            })->make(true);
    }

    public function ajudantesAnyData()
    {
        return Datatables::of(Ajudante::query())
            ->addColumn('action', function ($ajudante) {
                $url = action('AjudantesController@edit', ['id' => $ajudante->id]);
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>';
            })->make(true);
    }

    public function usuariosAnyData()
    {
        return Datatables::of(Usuario::query())
            ->addColumn('action', function ($usuario) {
                $url = action('UsuariosController@edit', ['id' => $usuario->id]);
                return '<a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>';
            })->make(true);
    }

    public function coletasAnyData()
    {
        $coleta = Coleta::all();

        return Datatables::of($coleta)
            ->addColumn('motorista', function(Coleta $coleta){
                return $coleta->Motorista->nome;
            })
            ->addColumn('ajudante', function(Coleta $coleta){
                return $coleta->Ajudante->nome;
            })
            ->addColumn('veiculo', function(Coleta $coleta){
                return $coleta->Veiculo->tipo;
            })
            ->addColumn('action', function ($usuario) {
                $url = action('ColetaController@edit', ['id' => $usuario->id]);
                $urlShow = action('ColetaController@show', ['id' => $usuario->id]);
                return '<a href="'.$urlShow.'" class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Visualizar</a>  <a href="'.$url.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>';
            })->make(true);
    }

}
