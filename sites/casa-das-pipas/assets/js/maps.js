
var map;
//Instanciaremos ele mais tarde, que serÃƒÂ¡ o nosso google.maps.DirectionsRenderer
var directionsDisplay; 
var directionsService 	= new google.maps.DirectionsService();
var info 				= new google.maps.InfoWindow({maxWidth: 350});

var marker 				= new google.maps.Marker({

	title: 				'Casa das Pipas',
	icon: 				'assets/img/marker.png',
	position: 			new google.maps.LatLng('-8.071026', '-34.879354') 

});		

function initialize() {

		directionsDisplay = new google.maps.DirectionsRenderer(); // Instanciando...
		var latlng = new google.maps.LatLng('-8.071026', '-34.879354'); //-8.071026, -34.879354

		var options = {

			zoom: 17,
			scrollwheel: false,
			center: marker.position,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#523735"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#c9b2a6"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#dcd2be"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#ae9e90"
      }
    ]
  },
  {
    "featureType": "landscape.natural",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#93817c"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#a5b076"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#447530"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f1e6"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#fdfcf8"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f8c967"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#e9bc62"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e98d58"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry.stroke",
    "stylers": [
      {
        "color": "#db8555"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#806b63"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8f7d77"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#ebe3cd"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dfd2ae"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#b9d3c2"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#92998d"
      }
    ]
  }
]
		};

		map = new google.maps.Map(document.getElementById("map"), options);

		marker.setMap(map);

		google.maps.event.addListener(marker, 'click', function() {
			info.setContent('<p><strong>Casa das Pipas</strong> <br>R. dos Pescadores, 67 - São José, Recife - PE, 50020-410</p>');
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