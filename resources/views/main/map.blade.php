<?php

$config = array();
    $config['center'] = 'auto';
    $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(' . $coords[0] . ',' . $coords[1] . ')
            });
        }
        centreGot = true;';

    Gmaps::initialize($config);

    // set up the marker ready for positioning
    // once we know the users location
    $marker = array();
    Gmaps::add_marker($marker);

    $map = Gmaps::create_map();
    echo "<html>
            <head>
                <script type='text/javascript'>
                    var centreGot = false;
                </script>"
                .$map['js'].
           "</head>
           <body>"
            .$map['html'].
            "</body>
        </html>";