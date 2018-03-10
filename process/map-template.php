<div id="MAP_ID" class="gmap" data-mapid="MAP_ID" style="height: 300px;"></div>

<script>

jQuery(function($){

    var address = "ADDRESSLINE1_PH, CITY_PH, STATE_PH ZIPCODE_PH"; 
    var markerContent = "MARKER_CONTENT_PH";
    console.log('marker content: ' + markerContent);
    console.log('address: ' +  address);

    map = new GMaps({
        div: '#MAP_ID',
        zoom: 16,
        lat: -12.043333,
        lng: -77.028333,      
    });

    GMaps.geocode({
    address: address,
    callback: function(results, status) {
        if (status == 'OK') {
        var latlng = results[0].geometry.location;
        map.setCenter(latlng.lat(), latlng.lng());
        map.addMarker({
            lat: latlng.lat(),
            lng: latlng.lng(),
            infoWindow: {
                content: markerContent
                }
        });
        }
        
    }
    });

    


});

      
</script>