<div id="MAP_ID" class="gmap" data-mapid="MAP_ID" style="height: 300px;"></div>

<ul>
    <li><strong>Address Line 1: </strong> ADDRESSLINE1_PH </li>
    <li><strong>Address Line 2: </strong> ADDRESSLINE2_PH </li>
    <li><strong>City: </strong> CITY_PH </li>
    <li><strong>State: </strong> STATE_PH </li>
    <li><strong>Zipcode: </strong> ZIPCODE_PH </li>
</ul>

<script>

jQuery(function($){

    map = new GMaps({
        div: '#MAP_ID',
        zoom: 16,
        lat: -12.043333,
        lng: -77.028333,
        click: function(e) {
        alert('click');
        },
        dragend: function(e) {
        alert('dragend');
        }
    });

    map.addMarker({
    lat: -12.043333,
    lng: -77.028333,
    title: 'Lima',
    click: function(e) {
        alert('You clicked in this marker');
    }
    });


});

      
</script>