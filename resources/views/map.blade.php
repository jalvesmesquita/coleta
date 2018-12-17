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

    <div id="map"></div>
    aehuaehuea


@endsection

@push('scripts')

<script>

    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });

    }

</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRZkFsZNF6jjII-FGR7kR3PRexS0vLwro&callback=initMap"></script>
@endpush
