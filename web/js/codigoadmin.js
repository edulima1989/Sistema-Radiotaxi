var geocoder;
var $map;
var directionDisplay;
var $sectores;
var $marker = null;

function iniciar() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    geocoder = new google.maps.Geocoder();
    var latlng = new google.maps.LatLng(-4.007595, -79.208379);
    var myOptions = {
        zoom: 14,
        center: latlng,
        disableDefaultUI: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    $map = new google.maps.Map(document.getElementById("mapa"),
        myOptions);     
    google.maps.event.addListener($map, 'click', function(e) {
        placeMarker(e, $map);
    });
    $.ajax({
        url:rootPath+"codigo/cargarSectores",
        type: "POST",
        data: "",
        dataType: 'json',
        cache: false,
        success: function(datos){
            $sectores=eval(datos);
        }
    });
    $('#codigo_barrio').attr('onChange','centrarMapa(this.value)');
    setTimeout(function(){
        centrarMapa($('#codigo_barrio').val());
    }, 1500);
}
function placeMarker(e) {
    if($marker)
        $marker.setMap(null);
    $marker = new google.maps.Marker({
        position: e.latLng,
        map: $map
    });
    $map.panTo(e.latLng);
    $('#codigo_latitud').attr('value',e.latLng.lat());
    $('#codigo_longitud').attr('value',e.latLng.lng());
}
function centrarMapa(id){
    unSector=$sectores[id];
    $map.setZoom(16);
    var latlng = new google.maps.LatLng(unSector.lat,unSector.lng);
    $map.setCenter(latlng);
}