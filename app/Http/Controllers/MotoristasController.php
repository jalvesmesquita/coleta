<?php

namespace App\Http\Controllers;

use App\Motorista;
use Illuminate\Http\Request;
use App\Http\Requests\MotoristasRequest;

class MotoristasController extends Controller
{
    public $model = 'App\Motorista';

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('motoristas.index');
    }

    public function create()
    {
        return view('motoristas.create');
    }

    public function store(MotoristasRequest $request)
    {
        $motorista = new $this->model($request->all());
        $motorista->save();
        return redirect()->action('MotoristasController@index');
    }

    public function edit($id)
    {
        $motorista = Motorista::find($id);
        return view('motoristas.edit')->with(['motorista' => $motorista]);
    }

    public function update($id, MotoristasRequest $request)
    {
        $motorista = Motorista::find($id);
        $motorista['nome'] = $request->input('nome');
        $motorista['email'] = $request->input('email');
        $motorista['telefone'] = $request->input('telefone');
        $motorista['endereco'] = $request->input('endereco');
        $motorista['cnh'] = $request->input('cnh');
        $motorista['nascimento'] = $request->input('nascimento');
        $motorista['sexo'] = $request->input('sexo');

        $motorista->update();
        return redirect()->action('MotoristasController@index');
    }
}
