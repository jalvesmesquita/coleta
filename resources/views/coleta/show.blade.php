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
                <li><a href="{{ action('ColetaController@index') }}"> Coletas</a></li>
                <li class="active">Exibir</li>
            </ul>
            <!--breadcrumbs end -->
        </div>
    </div>
    <div class="row">

        <div class="col-md-6">
            <section class="panel">
                <header class="panel-heading">
                    Coleta {{ $coleta->id }}
                    <span class="tools pull-right">
                                {{--<a href="javascript:;" class="fa fa-chevron-down"></a>--}}
                        {{--<a href="javascript:;" class="fa fa-remove"></a>--}}
                            </span>
                </header>
                <div class="panel-body">
                    <div id="map" class="gmaps" style="position: relative; overflow: hidden;">
                        <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                            <div class="gm-style"
                                 style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                                <div tabindex="0"
                                     style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none;">
                                    <div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                                <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, -152, -75);">
                                                    <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                    <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;">
                                                        <div style="width: 256px; height: 256px;"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div style="position: absolute; z-index: 983; transform: matrix(1, 0, 0, 1, 360, -331);">
                                                <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37488!3i69954!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=92366"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37487!3i69954!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=94847"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37487!3i69953!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=13709"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37489!3i69953!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=8747"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37488!3i69953!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=11228"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: -768px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37486!3i69954!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=97328"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37486!3i69953!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=16190"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                                <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;">
                                                    <img draggable="false" alt="" role="presentation"
                                                         src="http://maps.google.com/maps/vt?pb=!1m5!1m4!1i17!2i37489!3i69954!4i256!2m3!1e0!2sm!3i447153374!2m3!1e2!6m1!3e5!3m14!2spt-BR!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0!23i1301875&amp;token=89885"
                                                         style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="gm-style-pbc"
                                         style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0; transition-duration: 0.2s;">
                                        <p class="gm-style-pbt"></p></div>
                                    <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                        <div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);">
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <iframe aria-hidden="true" frameborder="0"
                                        style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"
                                        src="about:blank"></iframe>
                                <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                    <a target="_blank" rel="noopener"
                                       href="https://maps.google.com/maps?ll=-12.045479,-77.037248&amp;z=17&amp;t=m&amp;hl=pt-BR&amp;gl=US&amp;mapclient=apiv3"
                                       title="Open this area in Google Maps (opens a new window)"
                                       style="position: static; overflow: visible; float: none; display: inline;">
                                        <div style="width: 66px; height: 26px; cursor: pointer;"><img alt=""
                                                                                                      src="http://maps.gstatic.com/mapfiles/api-3/images/google4.png"
                                                                                                      draggable="false"
                                                                                                      style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;">
                                        </div>
                                    </a></div>
                                <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 230px; top: 60px;">
                                    <div style="padding: 0px 0px 10px; font-size: 16px;">Dados do mapa</div>
                                    <div style="font-size: 13px;">Dados cartográficos ©2018 Google</div>
                                    <button draggable="false" title="Close" aria-label="Close" type="button"
                                            class="gm-ui-hover-effect"
                                            style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;">
                                        <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                             style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;">
                                    </button>
                                </div>
                                <div class="gmnoprint"
                                     style="z-index: 1000001; position: absolute; right: 275px; bottom: 0px; width: 169px;">
                                    <div draggable="false" class="gm-style-cc"
                                         style="user-select: none; height: 14px; line-height: 14px;">
                                        <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                            <div style="width: 1px;"></div>
                                            <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                        </div>
                                        <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                            <a style="text-decoration: none; cursor: pointer; display: none;">Dados do
                                                mapa</a><span>Dados cartográficos ©2018 Google</span></div>
                                    </div>
                                </div>
                                <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                    <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
                                        Dados cartográficos ©2018 Google
                                    </div>
                                </div>
                                <div class="gmnoprint gm-style-cc" draggable="false"
                                     style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 112px; bottom: 0px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                        <a href="https://www.google.com/intl/pt-BR_US/help/terms_maps.html"
                                           target="_blank" rel="noopener"
                                           style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Termos
                                            de Uso</a></div>
                                </div>
                                <button draggable="false" title="Ativar a visualização em tela cheia"
                                        aria-label="Ativar a visualização em tela cheia" type="button"
                                        class="gm-control-active gm-fullscreen-control"
                                        style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; top: 0px; right: 0px;">
                                    <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                         style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                            style="height: 18px; width: 18px;"><img
                                            src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                            style="height: 18px; width: 18px;"></button>
                                <div draggable="false" class="gm-style-cc"
                                     style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                        <a target="_blank" rel="noopener"
                                           title="Informar erros no mapa ou nas imagens para o Google"
                                           href="https://www.google.com/maps/@-12.0454786,-77.0372482,17z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3"
                                           style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar
                                            erro no mapa</a></div>
                                </div>
                                <div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="40"
                                     controlheight="81"
                                     style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 0px;">
                                    <div class="gmnoprint" controlwidth="40" controlheight="81"
                                         style="position: absolute; left: 0px; top: 0px;">
                                        <div draggable="false"
                                             style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;">
                                            <button draggable="false" title="Aumentar o zoom"
                                                    aria-label="Aumentar o zoom" type="button" class="gm-control-active"
                                                    style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                     style="height: 18px; width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="height: 18px; width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="height: 18px; width: 18px;"></button>
                                            <div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div>
                                            <button draggable="false" title="Diminuir o zoom"
                                                    aria-label="Diminuir o zoom" type="button" class="gm-control-active"
                                                    style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;">
                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                     style="height: 18px; width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="height: 18px; width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="height: 18px; width: 18px;"></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false"
                                     controlwidth="0" controlheight="0"
                                     style="margin: 10px; user-select: none; position: absolute; display: none; bottom: 14px; right: 0px;">
                                    <div style="position: absolute; left: 0px; top: 0px;"></div>
                                    <div class="gmnoprint" controlwidth="40" controlheight="40"
                                         style="display: none; position: absolute;">
                                        <div style="width: 40px; height: 40px;">
                                            <button draggable="false" title="Rotate map 90 degrees"
                                                    aria-label="Rotate map 90 degrees" type="button"
                                                    class="gm-control-active"
                                                    style="background: none rgb(255, 255, 255); display: none; border: 0px; margin: 0px 0px 32px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                     style="height: 18px; width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="height: 18px; width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224%22%20height%3D%2222%22%20viewBox%3D%220%200%2024%2022%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20fill-rule%3D%22evenodd%22%20d%3D%22M20%2010c0-5.52-4.48-10-10-10s-10%204.48-10%2010v5h5v-5c0-2.76%202.24-5%205-5s5%202.24%205%205v5h-4l6.5%207%206.5-7h-4v-5z%22%20clip-rule%3D%22evenodd%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="height: 18px; width: 18px;"></button>
                                            <button draggable="false" title="Tilt map" aria-label="Tilt map"
                                                    type="button" class="gm-tilt gm-control-active"
                                                    style="background: none rgb(255, 255, 255); display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 40px; height: 40px; top: 0px; left: 0px; overflow: hidden; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px;">
                                                <img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                     style="width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="width: 18px;"><img
                                                        src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218px%22%20height%3D%2216px%22%20viewBox%3D%220%200%2018%2016%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C16h8V9H0V16z%20M10%2C16h8V9h-8V16z%20M0%2C7h8V0H0V7z%20M10%2C0v7h8V0H10z%22%2F%3E%0A%3C%2Fsvg%3E%0A"
                                                        style="width: 18px;"></button>
                                        </div>
                                    </div>
                                </div>
                                <div draggable="false" class="gm-style-cc"
                                     style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 191px; bottom: 0px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
                                        <span>50 m&nbsp;</span>
                                        <div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 47px;">
                                            <div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
                                            <div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div>
                                            <div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div>
                                            <div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
                                            <div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div>
                                            <div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;">
                            <div><img alt="" src="http://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg"
                                      draggable="false"
                                      style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;">
                            </div>
                            <div style="line-height: 20px; margin: 15px 0px;"><span
                                        style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">Esta página não carregou o Google Maps corretamente.</span>
                            </div>
                            <table style="width: 100%;">
                                <tr>
                                    <td style="line-height: 16px; vertical-align: middle;"><a
                                                href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors"
                                                target="_blank" rel="noopener"
                                                style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this
                                            website?</a></td>
                                    <td style="text-align: right;">
                                        <button class="dismissButton">OK</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="col-md-6">


            <section class="panel">
                <header class="panel-heading">
                    Responsaveis
                </header>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-3">
                            <section class="panel">
                                <div class="follower">
                                    <div class="panel-body">
                                        <h4>Motorista</h4>
                                        <div class="follow-ava">
                                            <img src="{!! asset('img/follower-avatar.jpg') !!}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <footer class="follower-foot">
                                    <ul>
                                        <h4 style="text-align: center">{{ $coleta->Motorista->nome }}</h4>
                                    </ul>
                                </footer>

                            </section>
                        </div>

                        <div class="col-xs-3">
                            <section class="panel">
                                <div class="follower">
                                    <div class="panel-body">
                                        <h4>Ajudante</h4>
                                        <div class="follow-ava">
                                            <img src="{!! asset('img/follower-avatar.jpg') !!}" alt="">
                                        </div>
                                    </div>
                                </div>

                                <footer class="follower-foot">
                                    <ul>
                                        <h4 style="text-align: center">{{ $coleta->Ajudante->nome }}</h4>
                                    </ul>
                                </footer>
                            </section>
                        </div>


                    </div>
                    <div class="row">
                        <header class="panel-heading">
                            Usuarios da Coleta
                        </header>
                        @foreach($coleta->Usuario as $usuario)
                            <div class="col-xs-3" style="margin-top: 10px">
                                <!--follower start-->
                                <section class="panel">
                                    <div class="follower">
                                        <div class="panel-body">
                                            <div class="follow-ava">
                                                <img src="{!! asset('img/follower-avatar.jpg') !!}" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <footer class="follower-foot">
                                        <ul>
                                            <h4 style="text-align: center">{{ $usuario->nome }}</h4>
                                        </ul>
                                    </footer>
                                </section>
                                <!--follower end-->
                            </div>
                        @endforeach
                    </div>
                    <header class="panel-heading">
                        Informações da Coleta
                    </header>
                    <div class="row">
                        <div class="col-md-12" style="margin-top: 10px">
                            <!--follower start-->
                            <section class="panel">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label for="">Data</label>
                                        <div class="input-group m-bot15">
                                            <span class="input-group-addon"><i class="fa fa-calendar-times-o" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" disabled value="{{ $coleta->data }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Quantidade</label>
                                        <div class="input-group m-bot15">
                                            <span class="input-group-addon"><i class="fa fa-calculator" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" placeholder="Username" disabled value="{{ $coleta->quantidade }}">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--follower end-->
                        </div>
                    </div>
                </div>


            </section>
        </div>

    </div>

    @push('scripts')

        <script>

            let coleta = {!! json_encode($coleta) !!};
            let usuarios = {!! json_encode($coleta->Usuario) !!};

            function initMap() {
                var directionsService = new google.maps.DirectionsService;
                var directionsDisplay = new google.maps.DirectionsRenderer;

                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 6,
                    center: {
                        lat: -9.648139,
                        lng: -35.717239
                    }
                });

                directionsDisplay.setMap(map);
                calculateAndDisplayRoute(directionsService, directionsDisplay);
            }

            function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                var waypts = [];

                for (var i = 0; i < usuarios.length; i++) {
                    waypts.push({
                        location: {
                            "lat": parseFloat(usuarios[i]['latitude']),
                            "lng": parseFloat(usuarios[i]['longitude'])
                        }
                    })
                }
                directionsService.route({
                    origin: {
                        lat: parseFloat(usuarios[0]['latitude']),
                        lng: parseFloat(usuarios[0]['longitude'])
                    },
                    destination: {
                        //     lat: parseFloat(usuarios[1]['latitude']),
                        //     lng: parseFloat(usuarios[1]['longitude']),
                        // },
                        lat: parseFloat(usuarios[0]['latitude']),
                        lng: parseFloat(usuarios[0]['longitude'])
                    },
                    waypoints: waypts,
                    optimizeWaypoints: true,
                    travelMode: 'DRIVING'
                }, function (response, status) {
                    if (status === 'OK') {
                        directionsDisplay.setDirections(response);
                    } else {
                        window.alert('Directions request failed due to ' + status);
                    }
                });
            }

        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRZkFsZNF6jjII-FGR7kR3PRexS0vLwro&callback=initMap"></script>
    @endpush


@endsection