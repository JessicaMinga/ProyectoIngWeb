

 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Rutas</title>
 <script type="text/javascript">
function loadLocation () {
  //inicializamos la funcion y definimos  el tiempo maximo ,las funciones de error y exito.
  navigator.geolocation.getCurrentPosition(viewMap,ViewError,{timeout:1000});
}

public function presentar_datos_lat_long($id_local = '') {

        $this->query = "SELECT latitud,longitud FROM turismo WHERE id_local='$idturismo'";
        $datos = $this->traer_datos();
        if ($datos) {
            $this->mensaje = 'datos exitosos';
            return $datos;
        }
    }

//Funcion de exito
function viewMap (position) {
  var lon = position.coords.longitude;  //guardamos la longitud
  var lat = position.coords.latitude;   //guardamos la latitud
  var link = "http://maps.google.com/?ll="+lat+","+lon+"&z=14";
  document.getElementById("long").innerHTML = "Longitud: "+lon;
  document.getElementById("latitud").innerHTML = "Latitud: "+lat;
  document.getElementById("link").href = link;

}

function ViewError (error) {
  alert(error.code);
} 
</script>
  
</head>
<body onload="loadLocation();">
<label id="long"></label> <br/>
<label id="latitud"></label> <br/>
<a id="link" target="_blank">Enlace al mapa</a>

<script type="text/javascript">
  function initialize(){
    var lon;
    var lat;
    var marcador;
    var myLatlng = new google.maps.LatLng(lon, lat);
    var mapOptions = {
    zoom: 15,
    center: myLatlng
    }

    if (navigator.geolocation)
    {
      navigator.geolocation.getCurrentPosition(function(objPosition)
      {

        var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          marcador = new google.maps.LatLng(objPosition.coords.latitude,objPosition.coords.longitude);

          <?php while(($row = mysqli_fetch_assoc($resultT))){ ?>
          marcador2 = new google.maps.LatLng(<?php echo $row['latitud']; ?>,<?php echo $row['longitud']; ?>);
          <?php } ?>

          var directionsDisplay = new google.maps.DirectionsRenderer;
          var directionsService = new google.maps.DirectionsService;
          var startMarker = new google.maps.Marker({ position: marcador, map: map,animation:google.maps.Animation.DROP, icon: '../archivos/img_pag/marc_map/yo.png' });
          var stopMarker = new google.maps.Marker({ position: marcador2, map: map,animation:google.maps.Animation.DROP ,icon: '../archivos/img_pag/marc_map/local.png' });
          var request = {
           origin: marcador,
           destination:marcador2,
           travelMode: google.maps.DirectionsTravelMode.WALKING,
           provideRouteAlternatives: true
           };
           directionsService.route(request, function(response, status) {
           if (status == google.maps.DirectionsStatus.OK) {
               directionsDisplay.setMap(map);
               directionsDisplay.setOptions( { suppressMarkers: true } );
               directionsDisplay.setPanel($("#panel_ruta").get(0));
               directionsDisplay.setDirections(response);
           } else {
                   alert("No existen rutas entre ambos puntos");
           }
       });


            google.maps.event.addListener(marker, 'click', function(){
            var popup = new google.maps.InfoWindow();
            popup.setContent(note);
            popup.open(map, this);
          })

        lon = objPosition.coords.longitude;
        lat = objPosition.coords.latitude;

      }
      , function(objPositionError)
      {
        switch (objPositionError.code)
        {
          case objPositionError.PERMISSION_DENIED:
            content.innerHTML = "No se ha permitido el acceso a la posición del usuario.";
          break;
          case objPositionError.POSITION_UNAVAILABLE:
            content.innerHTML = "No se ha podido acceder a la información de su posición.";
          break;
          case objPositionError.TIMEOUT:
            content.innerHTML = "El servicio ha tardado demasiado tiempo en responder.";
          break;
          default:
            content.innerHTML = "Error desconocido.";
        }
      }, {
        maximumAge: 75000,
        timeout: 15000
      });
    }
    else
    {
      content.innerHTML = "Su navegador no soporta la API de geolocalización.";
    }

  }

  google.maps.event.addDomListener(window, 'load', initialize);
  </script>

</body>
</html>