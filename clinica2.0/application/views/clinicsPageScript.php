	        <script>
	          // Initialize and add the map
	          function initMap() {
	            // The location of Uluru
	            var clinica = {lat: <?php echo $clinicLat[0] ?>, lng: <?php echo $clinicLong[0] ?>};
	            // The map, centered at Uluru
	            var map = new google.maps.Map(
	                document.getElementById('clinicMap'), {zoom: 18, center: clinica});
	            // The marker, positioned at Uluru
	            var marker = new google.maps.Marker({position: clinica, map: map});
	          }
	        </script>
	        <!--Load the API from the specified URL
	        * The async attribute allows the browser to render the page while the API loads
	        * The key parameter will contain your own API key (which is not needed for this tutorial)
	        * The callback parameter executes the initMap() function
	        -->
	        <script async defer
	        	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOG5ExON7cf4EyBkBvF7iRX4O-oKlPI0E&callback=initMap">
	        </script>	      
	     	