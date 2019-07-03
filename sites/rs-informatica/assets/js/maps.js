var map;
//Instanciaremos ele mais tarde, que serÃ¡ o nosso google.maps.DirectionsRenderer
var directionsDisplay; 
var directionsService 	= new google.maps.DirectionsService();
var info 				= new google.maps.InfoWindow({maxWidth: 350});

var marker 				= new google.maps.Marker({

	title: 				'RS Informática',
	icon: 				'assets/img/marker.png',
	position: 			new google.maps.LatLng('-7.8904511', '-35.1799458') // -7.8904511, -35.1799458

});		
 
function initialize() {

		directionsDisplay = new google.maps.DirectionsRenderer(); // Instanciando...
		var latlng = new google.maps.LatLng('-7.8904511', '-35.1799458');

		var options = {

			zoom: 17,
			scrollwheel: false,
			center: marker.position,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			 styles: [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#f5f5f5"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#bdbdbd"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dadada"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#616161"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#c9c9c9"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      }
    ]

		};

		map = new google.maps.Map(document.getElementById("mapa"), options);

		marker.setMap(map);
			
		google.maps.event.addListener(marker, 'click', function() {
			info.setContent('<p style="color:#111111;"><strong style="font-size: 16px; color: #002d72;">RS INFORMÁTICA</strong> <br /><br />Rua Alto Santa Tereza, 2603, Centro - Paudalho - PE</p>');
			info.open(map, marker);
		}); 

	   directionsDisplay.setMap(map); // Relacionamos o directionsDisplay com o mapa desejado

}
 
initialize();
 
$("#form-localizacao").submit(function(event) {

	event.preventDefault();

	if($("#txtEnderecoPartida").val() !== ""){

		info.close();
		marker.setMap(null);

		var enderecoPartida = $("#txtEnderecoPartida").val();

		var request = { // Novo objeto google.maps.DirectionsRequest, contendo:

			origin: enderecoPartida, // origem
			destination: marker.position, // destino
			travelMode: google.maps.TravelMode.DRIVING // meio de transporte, nesse caso, de carro

		};

		directionsService.route(request, function(result, status) {

			if (status == google.maps.DirectionsStatus.OK) { // Se deu tudo certo

				directionsDisplay.setDirections(result); // Renderizamos no mapa o resultado
				directionsDisplay.setMap(map);

			}

		});

	}

	return false;

});