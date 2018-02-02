<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<script type="text/javascript">

 var locations = [
          
<?php foreach ($rows as $id => $row): ?>
    [<?php print $row; ?>],
<?php endforeach; ?>

];

    function InitMap() {
 
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: new google.maps.LatLng(-33.8378548, 151.2058176),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    //create empty LatLngBounds object
    var bounds = new google.maps.LatLngBounds();
    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var image = '/sites/default/files/marker_new.png';
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][2], locations[i][3]),
            map: map,
            icon: image
        });

     //extend the bounds to include each marker's position
     bounds.extend(marker.position); 

        google.maps.event.addListener(marker, 'mouseover', (function (marker, i) {
            return function () {
                infowindow.setContent('<div class="infobox"><h3>'+locations[i][0]+'</h3><div>'+locations[i][1]+'</div></div>');
                infowindow.open(map, marker);
            }
        })(marker, i));

       google.maps.event.addListener(marker, 'mouseout', function () {
            infowindow.close();
        });

    }

        //now fit the map to the newly inclusive bounds
        map.fitBounds(bounds);
    }

</script>