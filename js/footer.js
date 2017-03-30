
	function initMap() {
 var location = {lat: 55.845382, lng: -3.207773};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: location,
           mapTypeId: 'satellite'
        });
        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
	}
