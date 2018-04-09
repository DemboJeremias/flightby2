
/*$( function() {
    $( "#departing" ).datepicker();

} );
$( function() {
    $( "#arrivalDate" ).datepicker();

} );

*/
var map;
var input1;
function initialize() {
  var lat = 51.8860;
    var lng = 0.2389;

    var mapOptions = {
        center: new google.maps.LatLng(lat,lng),
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.HYBRID
    };
    map = new google.maps.Map(document.getElementById("map"),
        mapOptions);

    var marker1 = new google.maps.Marker({
        position: new google.maps.LatLng(lat,lng),
        map: map

    });
    marker1.setMap(map);
    map.setMapTypeId('roadmap');
    input1 = google.maps.LatLng(lat,lng);

    marker1.addListener('click',function(){

    var iWinInfo = new google.maps.InfoWindow;
    var geocoder = new google.maps.Geocoder;

        geocoder.geocode({'location': input1}, function(results, status) {
            if (status === 'OK') {
                if (results[0]) {
                    // map.setZoom(11);

                    iWinInfo.setContent(results[0].formatted_address);
                    iWinInfo.open(map, marker);
                } else {
                    window.alert('No results found');
                }
            } else {
                window.alert('Geocoder failed due to: ' + status);
            }
        });
    });

}

google.maps.event.addDomListener(window, 'load', initialize);