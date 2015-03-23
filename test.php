<!DOCTYPE html>
<html> 
<head> 
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> 
    <title>Google Maps Demo</title> 
    <script type="text/javascript"
            src="http://maps.google.com/maps/api/js?sensor=false"></script> 

    <script type="text/javascript"> 
    function initialize() {

      var myOptions = {
        zoom: 15,
        center: new google.maps.LatLng(-33.9, 151.2),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }

      var map = new google.maps.Map(document.getElementById("map"), myOptions);

      var locations = [
        ['Bondi Beach', -33.890542, 151.274856, 4],
        ['Coogee Beach', -33.923036, 151.259052, 5],
        ['Cronulla Beach', -34.028249, 151.157507, 3],
        ['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
        ['Maroubra Beach', -33.950198, 151.259302, 1]
      ];

      for (var i = 0; i < locations.length; i++) {
          var location = locations[i];
          var myLatLng = new google.maps.LatLng(location[1], location[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              title: location[0],
              zIndex: location[3]
          });
      }
    }
    </script> 
</head> 
<body style="margin:0px; padding:0px;" onload="initialize();"> 
    <div id="map" style="width:400px; height:500px;"></div> 
</body> 
</html>