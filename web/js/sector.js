var geocoder;
var $map;
var directionDisplay;
var $marker = null;

function iniciar() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    geocoder = new google.maps.Geocoder();
    var lat = $('#sector_latitud').val();
    var lng = $('#sector_longitud').val();
    if(lat && lng){
        var latlng = new google.maps.LatLng(lat, lng);
        var myOptions = {
            zoom: 16,
            center: latlng,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };     
    }else{
        var latlng = new google.maps.LatLng(-4.007595, -79.208379);
        var myOptions = {
            zoom: 14,
            center: latlng,
            disableDefaultUI: true,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
    }
    $map = new google.maps.Map(document.getElementById("mapa"),
        myOptions);     
    google.maps.event.addListener($map, 'click', function(e) {
        placeMarker(e, $map);
    });
}
function placeMarker(e) {
    if($marker)
        $marker.setMap(null);
    $marker = new google.maps.Marker({
        position: e.latLng,
        map: $map
    });
    $map.panTo(e.latLng);
    $('#sector_latitud').attr('value',e.latLng.lat());
    $('#sector_longitud').attr('value',e.latLng.lng());
}