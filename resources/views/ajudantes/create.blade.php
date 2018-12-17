@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ action('AjudantesController@index') }}"> Ajudantes</a></li>
                <li class="active">Novo</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Novo Ajudante
                </header>
                <div class="panel-body">
                    <form role="form" action="{{ action('AjudantesController@store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" id="" placeholder="Nome" name="nome" value="{{ old('nome') }}">
                                    @if($errors->has('nome'))
                                        <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="" placeholder="Email" name="email" value="{{ old('email') }}">
                                    @if($errors->has('email'))
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Identidade</label>
                                    <input type="number" class="form-control" id="" placeholder="Identidade" name="rg" value="{{ old('rg') }}">
                                    @if($errors->has('rg'))
                                        <strong style="color: red">{{ $errors->first('rg') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">CPF</label>
                                    <input type="text" class="form-control" id="" placeholder="CPF" data-mask="999.999.999.99" name="cpf" value="{{ old('cpf') }}">
                                    @if($errors->has('cpf'))
                                        <strong style="color: red">{{ $errors->first('cpf') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Telefone</label>
                                    <input type="text" class="form-control" id="" placeholder="Telefone" name="telefone" data-mask="(99) 9999-9999" value="{{ old('telefone') }}">
                                    @if($errors->has('telefone'))
                                        <strong style="color: red">{{ $errors->first('telefone') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nascimento</label>
                                    <input type="date" class="form-control" id="" placeholder="Nascimento" name="nascimento" value="{{ old('value') }}">
                                    @if($errors->has('nascimento'))
                                        <strong style="color: red">{{ $errors->first('nascimento') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-5">
                                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Cadastrar</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Limpar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection