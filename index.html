<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OSM/Google Map</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/leaflet/leaflet.css" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>



  <main id="main">

    <!-- ======= Google Map Section ======= -->
    <section id="googlemap-section" class="googlemap-section">
      <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row mb-3 bg-light rounded">
          <a class="flex-sm-fill text-sm-center nav-link active" data-bs-toggle="tab" href="#tab-osmmap">Open Street Map</a>
          <a class="flex-sm-fill text-sm-center nav-link " data-bs-toggle="tab" href="#tab-googlemap">Google Map</a>
        </nav>

        <div class="tab-content">
           <div class="tab-pane fade active show" id="tab-osmmap">
            <div class="card card-body mb-5">
              <div class="form-group">
                <input list="listosmMapSearch" id="searchosmMapInput" class="form-control" type="text" placeholder="Enter a location/Address">
                <datalist id="listosmMapSearch"></datalist>
              </div>
              <ul id="osmgeoData" class="mt-4 list-unstyled">
                <li class="list-item text-dark">Full Address : <span id="osm-location-snap"></span></li>
                <li class="list-item text-dark">Latitude : <span id="osm-lat-snap"></span></li>
                <li class="list-item text-dark">Longitude : <span id="osm-lon-snap"></span></li>
              </ul>
            </div>
    
            <div class="card card-body mb-5">
              <div class="row">
                <div class="col-12">
                  <div id="osmmap" name="osmmap" style="min-height: 400px;"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="tab-googlemap">
            <div class="card card-body mb-5">
              <div class="form-group">
                <input id="searchMapInput" class="form-control" type="text" placeholder="Enter a location/Address">
                <input type="hidden" name="map_address" id="map_address" value="" placeholder="">
              </div>
              <ul id="geoData" class="mt-4 list-unstyled">
                <li class="list-item text-dark">Full Address : <span id="location-snap"></span></li>
                <li class="list-item text-dark">Latitude : <span id="lat-span"></span></li>
                <li class="list-item text-dark">Longitude : <span id="lon-span"></span></li>
              </ul>
            </div>
    
            <div class="card card-body mb-5">
              <div class="row">
                <div class="col-12">
                  <div id="googlemap" name="googlemap" style="min-height: 400px;"></div>
                </div>
              </div>
            </div>
          </div>         
        </div>
        

      </div>
    </section><!-- End googlemap Section -->

  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery-3.6.0.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/leaflet/leaflet.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  <script>
    //to show map   
    function setmap(lat, lon) {
      $('#googlemap').css({
        'height': '400px',
        'border': '1px solid #000'
      });

      var latlng = new google.maps.LatLng(lat, lon);
      var googlemap = new google.maps.Map(document.getElementById("googlemap"), {
        center: latlng,
        zoom: 11,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var marker = new google.maps.Marker({
        position: latlng,
        map: googlemap
      });
    }


    function initMap() {
      var input = document.getElementById('searchMapInput');
      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.addListener('place_changed', function () {
        var place = autocomplete.getPlace();
        document.getElementById('location-snap').innerHTML = place.formatted_address;
        document.getElementById('lat-span').innerHTML = place.geometry.location.lat();
        document.getElementById('lon-span').innerHTML = place.geometry.location.lng();
        // document.getElementById('lat').value = place.geometry.location.lat();
        // document.getElementById('lon').value = place.geometry.location.lng();

        document.getElementById('map_address').value = place.formatted_address;

        setmap(place.geometry.location.lat(), place.geometry.location.lng());
      });

    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap&sensor=false&key=" async defer></script>
 
    <script>
      $(function () {
        var latlong;
        // OSM Map
        var osmmap = L.map('osmmap');
        function loadOSMMap(name, lat, lon) {
          // initialize Leaflet
          osmmap.setView([lat, lon], 13);
  
          // add the OpenStreetMap tiles
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://openstreetmap.org/copyright">OpenStreetMap contributors</a>'
          }).addTo(osmmap);
  
          // show the scale bar on the lower left corner
          L.control.scale({imperial: true, metric: true}).addTo(osmmap);
  
          // show a marker on the map
          L.marker({lat: lat, lon: lon}).bindPopup(name).addTo(osmmap);
        }
  
        $('#searchosmMapInput').keyup(function () {

          if($(this).val() != '') {
            let address = encodeURI($(this).val());
            $.ajax({
              url: 'https://nominatim.openstreetmap.org/search?format=json&q='+address,
              type: 'get', 
              dataType: 'json',
              beforeSend: function () {
                $('#listosmMapSearch').html('');
              }
            }).then(function (res) {
               if (res.length > 0) {
                $.each(res, function (sinx, search) {
                  $('#listosmMapSearch').append(`<option id="${search.place_id}" data-latlon="${search.lat}:${search.lon}" value="${search.display_name}">`);
                });
              }
            });
          }
        });
  
        $('#searchosmMapInput').on('change', function() { 
          if ($(this).val() != '') {
            var opt = $('#listosmMapSearch option[value="'+$(this).val()+'"]');
             let optLocation = opt.attr('data-latlon').split(':');
            $('#osm-location-snap').html($(this).val()); 
            getLatLong($(this).val())
          
            loadOSMMap($(this).val(), latlong['latitude'], latlong['longitude']);
          }
        });

        function getLatLong(address){
           $.ajax({
                type: "POST",
                url: "data.php",
                dataType: 'json',
                async: false,
                data:  {address:address}, 
                success: function(data){ 
                   $('#osm-lat-snap').html(data['latitude']);
                   $('#osm-lon-snap').html(data['longitude']);  
                   latlong = data ;
                   return latlong;
                }
                });  

        }
  
      });
  
    </script>
</body>

</html>