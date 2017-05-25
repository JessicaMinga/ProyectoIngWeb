  <body>

<style type="text/css">
  
  #map {
  height: 90%;
  width: 86%;
  margin-left: 7em;
  }
</style>

  <?php
          
  
        $model = new funcionesModelo(); 
         $id=$_GET['a'];
      
   

        $item= $model -> get_mapaSitio($id);
      
        
       $nombre=$item -> nombre;


           
          
?>
    <div id="map"></div>

    <script>
      
      var arrayJSlat=<?php echo $item -> latitud; ?>;
      var arrayJSlog=<?php echo $item -> longitud; ?>;
      var map;
 
    // Mostramos los valores del array
   
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: arrayJSlat, lng: arrayJSlog},
          zoom: 15
        });

      var infowindow = new google.maps.InfoWindow();
      var marker, i;
     
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(arrayJSlat, arrayJSlog),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent("<?php echo $nombre; ?>");
            infowindow.open(map, marker);
          }
        })(marker, i));
      

      }



    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEuw3yQTidamsgawgf7TjnoQtzmqdsoWc&callback=initMap"
    async defer></script>
  </body>
</html>




<section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=<?php echo $item -> latitud; ?>,<?php echo $item -> longitud; ?>&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=<?php echo $item -> latitud; ?>,<?php echo $item -> longitud; ?>&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=$nombre,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
    </section>