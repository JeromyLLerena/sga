<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">
      html, body { height: 100%; margin: 0; padding: 0; }
      #map { height: 100%; }
    </style>
  </head>
  <body>
    <div id="map" style="width:567px;height:400px"></div>
    <script type="text/javascript">
      var map;
      var lat = {{$coords[0]}};
      var lng = {{$coords[1]}};

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {
            lat: lat,
            lng: lng
          },
          zoom: 15
        });

        var marker = new google.maps.Marker({
          position: {
            lat: lat,
            lng: lng
          },
          map: map,
          title: 'Emergencia!'
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDuW51eMMDSiepiPQQJgMBVdtcOFgNq4Fo&callback=initMap">
    </script>
  </body>
</html>