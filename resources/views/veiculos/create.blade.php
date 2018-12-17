@extends('layouts.template')

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ action('VeiculosController@index') }}"> Veiculos</a></li>
                <li class="active">Novo</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Novo Motorista
                </header>
                <div class="panel-body">
                    <form role="form" action="{{ action('VeiculosController@store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tipo</label>
                                    <input type="text" class="form-control" id="" placeholder="Tipo" name="tipo" value="{{ old('tipo') }}">
                                    @if($errors->has('tipo'))
                                        <strong style="color: red">{{ $errors->first('tipo') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Cubagem</label>
                                    <input type="number" class="form-control" id="" placeholder="Cubagem" name="cubagem" value="{{ old('cubagem') }}">
                                    @if($errors->has('cubagem'))
                                        <strong style="color: red">{{ $errors->first('cubagem') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Placa</label>
                                    <input type="text" class="form-control" id="" placeholder="Placa" name="placa" data-mask="aaa-9999" value="{{ old('placa') }}">
                                    @if($errors->has('placa'))
                                        <strong style="color: red">{{ $errors->first('placa') }}</strong>
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

@push('scripts')
    <script>


    </script>

@endpush