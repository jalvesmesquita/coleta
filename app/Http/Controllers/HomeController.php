<?php

namespace App\Http\Controllers;

use App\Coleta;
use App\Motorista;
use App\Usuario;
use App\Veiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $motoristas = Motorista::all();
        $veiculos = Veiculo::all();
        $coletas = Coleta::all();
        return view('home')->with(['usuarios' => $usuarios, 'motoristas' => $motoristas, 'veiculos' => $veiculos, 'coletas' => $coletas]);
    }

    public function map()
    {
        return view('map');
    }
}
