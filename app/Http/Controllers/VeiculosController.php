<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Veiculo;

class VeiculosController extends Controller
{
    protected $model = 'App\Veiculo';

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('veiculos.index');
    }

    public function create()
    {
        return view('veiculos.create');
    }

    public function store(Request $request)
    {
        $veiculo = new $this->model($request->all());
        $veiculo->save();
        return redirect()->action('VeiculosController@index');
    }

    public function edit($id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculos.edit')->with(['veiculo' => $veiculo]);
    }

    public function update($id, Request $request)
    {
        $veiculo = Veiculo::find($id);
        $veiculo['tipo'] = $request->input('tipo');
        $veiculo['cubagem'] = $request->input('cubagem');
        $veiculo['placa'] = $request->input('placa');
        $veiculo->update();
        return redirect()->action('VeiculosController@index');
    }
}
