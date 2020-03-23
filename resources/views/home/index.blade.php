@extends('layouts.home.default')

@section('add-vendor-css')
<!-- Load Leaflet CSS and JS from CDN-->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

<!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@2.0.8"></script>
<script src="https://unpkg.com/esri-leaflet-renderers@2.0.6/dist/esri-leaflet-renderers.js"
integrity="sha512-mhpdD3igvv7A/84hueuHzV0NIKFHmp2IvWnY5tIdtAHkHF36yySdstEVI11JZCmSY4TCvOkgEoW+zcV/rUfo0A=="
crossorigin=""></script>

<!-- Load MouseCoordinate from CDN -->
<link rel="stylesheet" href="{{ asset('css/L.Control.MousePosition.css') }}">
<script src="{{ asset('js/L.Control.MousePosition.js') }}"></script>

<!-- Load extend Home -->
<link rel="stylesheet" href="{{ asset('css/leaflet.defaultextent.css') }}">
<script src="{{ asset('js/leaflet.defaultextent.js') }}"></script>
@endsection

@section('content')
<div class="content content-fixed">
    <div class="container-fluid">
        <div class="calcite-map">
            <div id="map" class="calcite-map-absolute"></div>
        </div>
    </div>
</div>
@endsection

@section('footer-fixed')
footer-fixed
@endsection

@section('add-script')
<script>
$(document).ready(function () {

    var alats = @json($alats);

    var url = '{{ url('/') }}';
    var boundary = new L.LatLngBounds(new L.LatLng(-21.41, 153.41), new L.LatLng(14.3069694978258, 73.65));
    var iconSize = L.Icon.extend({options: {iconSize: [32, 42]}});
    var seismic = new iconSize({iconUrl: url+'/images/seismic_1.png'});

    function zoomResponsive() {
        var width = screen.width;
            if (width <= 767) {
                return 4;
            }
            return 6;
    };

    var map = L.map('map', {
                zoomControl: false,
                center: [-1.82342, 115.70801],
                zoom: zoomResponsive(),
                attributionControl:false,
            }).setMinZoom(5).setMaxBounds(boundary);

    var layerNg = L.esri.basemapLayer('NationalGeographic').addTo(map);

    $.each(alats, function(index, alat) {
        var scnl = alat.scnl,
            latitude = alat.latitude,
            longitude = alat.longitude,
            elevasi = alat.elevasi,
            jumlah = alat.data_count

        var markerId = L.marker([latitude, longitude], {
                                icon: seismic,
                                title: scnl,
                            })
                            .bindPopup('<h5>'+scnl+'</h5><p>Jumlah Data : '+jumlah+'</p>',{
                                closeButton: true,
                            }).addTo(map);

    });

    L.control.zoom({position:'bottomright'}).addTo(map);
    L.control.mousePosition().addTo(map);
    L.control.defaultExtent().addTo(map);
});
</script>

@endsection
