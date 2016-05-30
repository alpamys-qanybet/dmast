// https://developers.google.com/maps/documentation/javascript/examples/
function initMap() {
	var customMapType = new google.maps.StyledMapType([
			{
				stylers: [
					{'saturation': -100},
					{'lightness': 51},
					{'visibility': 'simplified'}
				]
			},
			{
				elementType: 'labels',
				stylers: [{visibility: 'on'}]
			},
			{
				featureType: 'water',
				stylers: [{color: '#f7f4f4'}]
			}
		], {
			name: 'Азия СнабТорг'
	});

	var image = new google.maps.MarkerImage(
		'assets/img/marker.png',
		new google.maps.Size(48,54),
		new google.maps.Point(0,0),
		new google.maps.Point(24,54)
		);

	var customMapTypeId = 'custom_style';
	var myLatLng = {lat: 50.30857, lng: 57.143147};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 17,
		scrollwheel: false,
		center: myLatLng,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
		}
	});

	var infowindow = new google.maps.InfoWindow;
	infowindow.setContent('<b>Brooklyn</b>');

	var marker = new google.maps.Marker({
		map: map,
		title: 'Офис',
		// clickable: false,
		// icon: image,
		position: myLatLng
	});

	/*var mapDiv = document.getElementById('map');
	var myLatLng = {lat: 50.304893, lng: 57.159141};

	var map = new google.maps.Map(mapDiv, {
		zoom: 17,
		center: myLatLng
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Офис'
	});*/

	map.mapTypes.set(customMapTypeId, customMapType);
	map.setMapTypeId(customMapTypeId);
}

function fid_140052407543525456224(ymaps) {
    var map = new ymaps.Map("ymaps-map-id_140052407543525456224", {
        center: ['57.143147', '50.30857'],
        zoom: 16,
        type: "yandex#map"
    });
    map.controls
        .add("zoomControl")
        .add("mapTools")
        .add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid"]));
    map.geoObjects
        .add(new ymaps.Placemark(['57.143147', '50.30857'], {
            balloonContent: ""
        }, {
            preset: "twirl#lightblueDotIcon"
        }));
};
function showMap(map) {
	if (map == 'g') {
		jQuery('#map').show();
		jQuery('#ymaps-map-id_140052407543525456224').hide();

		jQuery('#map-btn-google').addClass('active');
		jQuery('#map-btn-yandex').removeClass('active');
	}
	else if (map == 'y') {
		jQuery('#map').hide();
		jQuery('#ymaps-map-id_140052407543525456224').show();

		jQuery('#map-btn-google').removeClass('active');
		jQuery('#map-btn-yandex').addClass('active');
	}
}

showMap('g');
