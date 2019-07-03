var map;
//Instanciaremos ele mais tarde, que serÃ¡ o nosso google.maps.DirectionsRenderer
var directionsDisplay; 
var directionsService 	= new google.maps.DirectionsService();
var info 				= new google.maps.InfoWindow({maxWidth: 350});

var marker 				= new google.maps.Marker({

	title: 				'DBS Alumínio',
	icon: 				'assets/img/marker.png',
	position: 			new google.maps.LatLng('-8.088661', '-34.8878498') ,

});		

function initialize() {

		directionsDisplay = new google.maps.DirectionsRenderer(); // Instanciando...
		var latlng = new google.maps.LatLng('-8.088661', '-34.8878498'); //-8.0462654,-34.910627

		var options = {

			zoom: 15,
			scrollwheel: false,
			center: marker.position,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
		};

		map = new google.maps.Map(document.getElementById("map"), options);

		marker.setMap(map);

		google.maps.event.addListener(marker, 'click', function() {
			info.setContent('<p><strong>DBS Alumínio</strong> <br>Av. Herculano Bandeira, 523 - Pina- Recife – PE</p>');
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