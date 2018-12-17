<?php

namespace App\Http\Controllers;

use App\Ajudante;
use App\Coleta;
use App\Motorista;
use App\Usuario;
use App\Veiculo;
use Illuminate\Http\Request;

class ColetaController extends Controller
{
    protected $model = 'App\Coleta';

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('coleta.index');
    }

    public function create()
    {
        $motoristas = Motorista::all();
        $ajudantes = Ajudante::all();
        $veiculos = Veiculo::all();
        $usuarios = Usuario::all();
        return view('coleta.create')->with(['motoristas' => $motoristas, 'ajudantes' => $ajudantes, 'veiculos' => $veiculos, 'usuarios' => $usuarios]);
    }

    public function store(Request $request)
    {
        $coleta = new $this->model($request->all());
        $coleta->save();
        $coleta->Usuario()->attach($request->input('usuarios'));
        return redirect()->action('ColetaController@index');
    }

    public function edit($id)
    {
        $coleta = Coleta::find($id);
        $motoristas = Motorista::all();
        $ajudantes = Ajudante::all();
        $veiculos = Veiculo::all();
        $usuarios = Usuario::all();

        return view('coleta.edit')->with(['motoristas' => $motoristas,
                                                'ajudantes' => $ajudantes,
                                                'veiculos' => $veiculos,
                                                'usuarios' => $usuarios,
                                                'coleta' => $coleta]);
    }

    public function update($id, Request $request)
    {
        $coleta = Coleta::find($id);
        $coleta['motorista_id'] = $request->input('motorista_id');
        $coleta['ajudante_id'] = $request->input('ajudante_id');
        $coleta['veiculo_id'] = $request->input('veiculo_id');
        $coleta['data'] = $request->input('data');
        $coleta['quantidade'] = $request->input('quantidade');
        $coleta['observacao'] = $request->input('observacao');
        $coleta->update();
        return redirect()->action('ColetaController@index');
    }

    public function show($id)
    {
        $coleta = Coleta::find($id);

        return view('coleta.show')->with(['coleta' => $coleta]);
    }
}
