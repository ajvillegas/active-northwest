/**
 * The Google Maps functionality of the website.
 *
 * @package    ActiveNorthwest
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {
	var lat = 45.5256439;
	var long = -122.6742046;
	var myOptions = {
		zoom: 14,
		center: new google.maps.LatLng( lat, long ),
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		disableDefaultUI: true,
		zoomControl: true,
		scrollwheel: false
	};
	var map = new google.maps.Map( document.querySelector( '.google-map' ), myOptions );
	var marker = new google.maps.Marker({
		position: map.getCenter(),
		map: map
	});

	map.set( 'styles', [
		{
			'featureType': 'all',
			'elementType': 'labels.text.fill',
			'stylers': [
				{
					'saturation': 36
				},
				{
					'color': '#000000'
				},
				{
					'lightness': 40
				}
			]
		},
		{
			'featureType': 'all',
			'elementType': 'labels.text.stroke',
			'stylers': [
				{
					'visibility': 'on'
				},
				{
					'color': '#000000'
				},
				{
					'lightness': 16
				}
			]
		},
		{
			'featureType': 'all',
			'elementType': 'labels.icon',
			'stylers': [
				{
					'visibility': 'off'
				}
			]
		},
		{
			'featureType': 'administrative',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 20
				}
			]
		},
		{
			'featureType': 'administrative',
			'elementType': 'geometry.stroke',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 17
				},
				{
					'weight': 1.2
				}
			]
		},
		{
			'featureType': 'administrative',
			'elementType': 'labels.text.fill',
			'stylers': [
				{
					'color': '#8b9198'
				}
			]
		},
		{
			'featureType': 'landscape',
			'elementType': 'geometry',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 20
				}
			]
		},
		{
			'featureType': 'landscape',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'color': '#323336'
				}
			]
		},
		{
			'featureType': 'landscape.man_made',
			'elementType': 'geometry.stroke',
			'stylers': [
				{
					'color': '#414954'
				}
			]
		},
		{
			'featureType': 'poi',
			'elementType': 'geometry',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 21
				}
			]
		},
		{
			'featureType': 'poi',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'color': '#2e2f31'
				}
			]
		},
		{
			'featureType': 'road',
			'elementType': 'labels.text.fill',
			'stylers': [
				{
					'color': '#7a7c80'
				}
			]
		},
		{
			'featureType': 'road.highway',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'color': '#242427'
				},
				{
					'lightness': 17
				}
			]
		},
		{
			'featureType': 'road.highway',
			'elementType': 'geometry.stroke',
			'stylers': [
				{
					'color': '#202022'
				},
				{
					'lightness': 29
				},
				{
					'weight': 0.2
				}
			]
		},
		{
			'featureType': 'road.arterial',
			'elementType': 'geometry',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 18
				}
			]
		},
		{
			'featureType': 'road.arterial',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'color': '#393a3f'
				}
			]
		},
		{
			'featureType': 'road.arterial',
			'elementType': 'geometry.stroke',
			'stylers': [
				{
					'color': '#202022'
				}
			]
		},
		{
			'featureType': 'road.local',
			'elementType': 'geometry',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 16
				}
			]
		},
		{
			'featureType': 'road.local',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'color': '#393a3f'
				}
			]
		},
		{
			'featureType': 'road.local',
			'elementType': 'geometry.stroke',
			'stylers': [
				{
					'color': '#202022'
				}
			]
		},
		{
			'featureType': 'transit',
			'elementType': 'geometry',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 19
				}
			]
		},
		{
			'featureType': 'transit.line',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'hue': '#ff0000'
				},
				{
					'gamma': '3.67'
				},
				{
					'saturation': '59'
				},
				{
					'weight': '1.66'
				}
			]
		},
		{
			'featureType': 'water',
			'elementType': 'geometry',
			'stylers': [
				{
					'color': '#000000'
				},
				{
					'lightness': 17
				}
			]
		},
		{
			'featureType': 'water',
			'elementType': 'geometry.fill',
			'stylers': [
				{
					'color': '#202124'
				}
			]
		}
	]);
}() );
