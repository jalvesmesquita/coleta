@extends('layouts.template')


@push('estilo')
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 500px;
            width: 100%;
        }
    </style>
@endpush

@section('conteudo')

    <div class="row">
        <div class="col-lg-12">
            <!--breadcrumbs start -->
            <ul class="breadcrumb">
                <li><a href="{{ action('HomeController@index') }}"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{{ action('UsuariosController@index') }}"> Usuarios</a></li>
                <li class="active">Editar</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Editar Usuario
                </header>
                <div class="panel-body">
                    <form role="form" action="{{ action('UsuariosController@update', $usuario->id) }}" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" id="" placeholder="Nome" name="nome" value="{{ $usuario->nome }}">
                                    @if($errors->has('nome'))
                                        <strong style="color: red">{{ $errors->first('nome') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="" placeholder="Email" name="email" value="{{ $usuario->email }}">
                                    @if($errors->has('email'))
                                        <strong style="color: red">{{ $errors->first('email') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Senha</label>
                                    <input type="password" class="form-control" id="" placeholder="Senha" name="senha" value="{{ $usuario->senha }}">
                                    @if($errors->has('senha'))
                                        <strong style="color: red">{{ $errors->first('senha') }}</strong>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="">Endereço</label>
                                    <input type="text" class="form-control" id="" placeholder="Endereço" name="endereco" value="{{ $usuario->endereco }}">
                                    @if($errors->has('endereco'))
                                        <strong style="color: red">{{ $errors->first('endereco') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-1">
                                <a class="btn btn-default btn-lg" data-toggle="modal" href="#myModal" style="margin-left: 10%;margin-top: 10px">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                    Mapa
                                </a>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" placeholder="Latitude" name="latitude" value="{{ $usuario->latitude }}">
                                    @if($errors->has('latitude'))
                                        <strong style="color: red">{{ $errors->first('latitude') }}</strong>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" placeholder="Longitude" name="longitude" value="{{ $usuario->longitude }}">
                                    @if($errors->has('longitude'))
                                        <strong style="color: red">{{ $errors->first('longitude') }}</strong>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-5">
                                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Atualizar</button>
                                <button type="reset" class="btn btn-danger"><i class="fa fa-trash"></i> Limpar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Selecione a Localização</h4>
                </div>
                <div class="modal-body">

                    <div id="map"></div>

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Fechar</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')

    <script>

        var map;
        function initMap() {

            var Maceio = {
                lat: -9.648139,
                lng: -35.717239
            };

            map = new google.maps.Map(document.getElementById('map'), {
                center: Maceio,
                zoom: 12,
                mapTypeId: 'terrain'
            });

            map.addListener('click', function(event) {
                $('#latitude').val(event.latLng.lat());
                $('#longitude').val(event.latLng.lng());
            });

        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRZkFsZNF6jjII-FGR7kR3PRexS0vLwro&callback=initMap"></script>
@endpush