<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuariosRequest;
use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    protected $model = 'App\Usuario';

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('usuarios.index');
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(UsuariosRequest $request)
    {
        $usuario = new $this->model($request->all());
        $usuario->save();
        return redirect()->action('UsuariosController@index');
    }

    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('usuarios.edit')->with(['usuario' => $usuario]);
    }

    public function update($id, UsuariosRequest $request)
    {
        $usuario = Usuario::find($id);
        $usuario['nome'] = $request->input('nome');
        $usuario['email'] = $request->input('email');
        $usuario['senha'] = $request->input('senha');
        $usuario['endereco'] = $request->input('endereco');
        $usuario['latitude'] = $request->input('latitude');
        $usuario['longitude'] = $request->input('longitude');
        $usuario->update();
        return redirect()->action('UsuariosController@index');
    }
}


