<html>
    <head>
                                                      
        
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
         <link href="css/twitter-blockquote.css" rel="stylesheet">
              <link href="css/twitter-styles.css" rel="stylesheet">
             <link href="css/menu.css" rel="stylesheet"> <!-- gives hamburger menu-->
             <link href="css/gps-styles.css" rel="stylesheet"> <!-- Google maps API-->
             <link href="css/expoMap.css" rel="stylesheet"> <!--iFrame-->
              <link href="css/iframe.css" rel="stylesheet"> <!--iFrame-->
    
    <!-- Google maps API styles-->
    <title>World's Fair Social Outlets</title>
    <!-- things for the map-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
    <script>
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initialize() {

  var markers = [];
  var map = new google.maps.Map(document.getElementById('map-canvas'), {
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(45.518897, 9.106938),
   new google.maps.LatLng(45.531224, 9.141013));
  map.fitBounds(defaultBounds);

  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // [START region_getplaces]
  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });
  // [END region_getplaces]

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <style>
      #target {
        width: 345px;
      }
    </style> 
    
    <!-------------------------------------MAP THINGS END------------------------------------------------------------->
    
    </head>
        <body>
            <div class="container">
           <div class="row col-lg-12 col-md-12 col-sm-12">
           <!------------------------------------ Menu----------------------------------------------------->
          <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
           <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
    <!-- makes hamburger-->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><img src="images/logoExpo1.png" alt="Expo logo"href="index.html"></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="http://www.rociosevillad.com/project-4/twitterAPI.php">Official Twitter</a></li>
                <li><a href="atm.html">Official Facebook</a></li>
                <li><a href="data.html">Official Instagram</a></li>
                <li><a href="prizes.html">View map</a></li>
                <li><a href="contact.html">Contact us</a></li> 
            </ul>
        </div> 
</nav>
                 <!------------------------------------ACTUAL BODY STARTS------------------->
    <br>
    <p>Welcome to <a class="expo-link" href="#">Expo2015</a>'s social media outlets and navigation!</p>
    Be sure to stay up to date with everything going on by following our social media with the #Expo2015.

    <br>
        Check out our live Instagram and Twitter feed to know about everything going on in the different pavillions! 
         <br>
            <br>
            <img src="images/line.png" alt="line" style= width:70%; height=2%>
            <br>
           <div class="row">
  <div class="instagram-iframe col-lg-6 col-md-6 col-sm-12"> <!-- instagram-->
         <!-- Instagram-->
               <!-- SnapWidget -->
                <p>Check out the latest Instagram pictures and make sure to share them with your friends!</p>
<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?u=ZXhwbzIwMTVtaWxhbm98aW58MTMwfDN8M3x8bm98NXxmYWRlSW58b25TdGFydHx5ZXN8eWVz&ve=180415" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style=" height: 500px; border:none; overflow:hidden; width:90%;"></iframe>
                </div><!-- closses Instagram div-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> <!-- necessary for map to work-->
             
           <!-- Twitter-->
            <div class="twitter-iframe-box col-lg-6 col-md-6 col-sm-12">
                
                <p>Scroll through the <a class="expo-link" href="#">#Expo2015 </a>tweets!</p>
                <br>
                <iframe src="http://www.rociosevillad.com/project-4/twitterAPI.php" name="twitter" scrolling="auto" frameborder="no" height = "500px" width = "500px" >
</iframe><!-- closses Twitter iframe-->
            </div> <!-- closses twitter div-->
            </div> <!-- closses row of Instagram and twitter-->
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12"> <!-- instagram-->
                <br>
                 <input id="pac-input" class="controls" type="text" placeholder="Search Box">
<div id="map-canvas"></div>
</div>
            
            </div> <!-- closses the container-->
             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      </div><!-- closes container-->
      </body>
   </html>
             
             