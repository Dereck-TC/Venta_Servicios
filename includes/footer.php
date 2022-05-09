<div class="hlt_copyright">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <p>&copy; Copyright <?php echo "$Year";    ?> , Todos los derechos reservados , <a href="#">Lapicito</a></p>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="../assets/js/plugins/jquery-3.3.1.min.js"></script> 
<script type="text/javascript" src="../assets/js/plugins/bootstrap.min.js"></script> 
<script type="text/javascript" src="../assets/js/plugins/owl.carousel.min.js"></script> 
<script type="text/javascript" src="../assets/js/plugins/jquery.bxslider.js"></script> 
<script type="text/javascript" src="../assets/js/plugins/jquery.mixitup.min.js"></script> 
<script type="text/javascript" src="../assets/js/plugins/smoothscroll.js"></script> 
<script type="text/javascript" src="../assets/js/plugins/single-0.1.0.js"></script> 
<script type="text/javascript" src="../assets/js/plugins/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="../assets/js/plugins/gmaps.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="../assets/js/plugins/custom.js"></script>
<script type="text/javascript">
    var map;
    $(document).ready(function(){
      map = new GMaps({
        div: '#map',
        lat: -12.043333,
        lng: -77.028333,
        markerClusterer: function(map) {
          return new MarkerClusterer(map);
        }
      });

      var lat_span = -12.035988012939503 - -12.050677786181573;
      var lng_span = -77.01528673535154 - -77.04137926464841;

      for(var i = 0; i < 100; i++) {
        var latitude = Math.random()*(lat_span) + -12.050677786181573;
        var longitude = Math.random()*(lng_span) + -77.04137926464841;

        map.addMarker({
          lat: latitude,
          lng: longitude,
          title: 'Marker #' + i
        });
      }
    });
  </script>
</body>
</html>