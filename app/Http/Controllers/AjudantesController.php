<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AjudantesRequest;
use App\Ajudante;

class AjudantesController extends Controller
{
    protected $model = 'App\Ajudante';

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('ajudantes.index');
    }

    public function create()
    {
        return view('ajudantes.create');
    }

    public function store(AjudantesRequest $request)
    {
        $ajudante = new $this->model($request->all());
        $ajudante->save();
        return redirect()->action('AjudantesController@index');
    }

    public function edit($id)
    {
        $ajudante = Ajudante::find($id);
        return view('ajudantes.edit')->with(['ajudante' => $ajudante]);
    }

    public function update($id, AjudantesRequest $request)
    {
        $ajudante = Ajudante::find($id);
        $ajudante['nome'] = $request->input('nome');
        $ajudante['email'] = $request->input('email');
        $ajudante['cpf'] = $request->input('cpf');
        $ajudante['rg'] = $request->input('rg');
        $ajudante['telefone'] = $request->input('telefone');
        $ajudante['nascimento'] = $request->input('nascimento');

        $ajudante->update();
        return redirect()->action('AjudantesController@index');
    }
}
