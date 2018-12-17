@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ action('ColetaController@index') }}"> Coletas</a></li>
                <li class="active">Novo</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Nova Coleta
                </header>
                <div class="panel-body">
                    <form role="form" action="{{ action('ColetaController@store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Motorista</label>
                                    <select class="form-control" name="motorista_id">
                                        @foreach($motoristas as $motorista)
                                            <option value="{{ $motorista->id }}">{{ $motorista->nome }}</option>
                                        @endforeach
                                    </select>
                                    {{--@if($errors->has('nome'))--}}
                                    {{--<strong style="color: red">{{ $errors->first('nome') }}</strong>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Ajudante</label>
                                    <select class="form-control" name="ajudante_id">
                                        @foreach($ajudantes as $ajudante)
                                            <option value="{{ $ajudante->id }}">{{ $ajudante->nome }}</option>
                                        @endforeach
                                    </select>
                                    {{--@if($errors->has('nome'))--}}
                                    {{--<strong style="color: red">{{ $errors->first('nome') }}</strong>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Veiculo</label>
                                    <select class="form-control" name="veiculo_id">
                                        @foreach($veiculos as $veiculo)
                                            <option value="{{ $veiculo->id }}">{{ $veiculo->tipo }}</option>
                                        @endforeach
                                    </select>
                                    {{--@if($errors->has('nome'))--}}
                                    {{--<strong style="color: red">{{ $errors->first('nome') }}</strong>--}}
                                    {{--@endif--}}
                                </div>
                            </div>

                            <div class="col-md-4">

                                <div class="form-group">
                                    <label for="">Usuarios</label>
                                    <select multiple class="form-control" name="usuarios[]">
                                        @foreach($usuarios as $usuario)
                                            <option value="{{ $usuario->id }}">{{ $usuario->nome }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('nome'))
                                        <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Data</label>
                                    <input type="date" class="form-control" id="" placeholder="Data" name="data"
                                           value="{{ old('data') }}">
                                    @if($errors->has('data'))
                                        <strong style="color: red">{{ $errors->first('data') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Quantidade</label>
                                    <input type="number" class="form-control" id="" placeholder="Quantidade"
                                           name="quantidade" value="{{ old('quantidade') }}">
                                    @if($errors->has('quantidade'))
                                        <strong style="color: red">{{ $errors->first('quantidade') }}</strong>
                                    @endif
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Observação</label>
                                    <input type="text" class="form-control" id="" placeholder="Observacao"
                                           name="observacao" value="{{ old('observacao') }}">
                                    @if($errors->has('observacao'))
                                        <strong style="color: red">{{ $errors->first('observacao') }}</strong>
                                    @endif
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-5 col-md-offset-5">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Cadastrar
                                    </button>
                                    <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Limpar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

@endsection