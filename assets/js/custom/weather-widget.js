/**
 * The weather widget functionality of the website.
 *
 * @package    AceInTheHole
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {

	// Define proxy and API call.
	const proxy = 'https://cors-anywhere.herokuapp.com/';
	const api = `${proxy}https://api.darksky.net/forecast/a05bdd0a76bee1c15ef8faccd8e0b2bf/45.5186307,-122.6960515`;

	// Select DOM elements.
	const currentTemp = document.querySelector( '#weather .conditions .temp' );
	const currentDesc = document.querySelector( '#weather .conditions .desc' );
	const currentIcon = document.querySelector( '#weather .currenticon > img' );
	const forecast = document.querySelectorAll( '#weather .day' );
	const weekday = [ 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday' ];

	// Fetch API.
	fetch( api )
		.then( response => {
			return response.json();
		})
		.then( data => {
			const { temperature, summary, icon } = data.currently;
			const daySummary = data.hourly.summary;
			const dailyData = data.daily.data;

			// Set DOM elements for current weather.
			currentTemp.textContent = Math.round( temperature ) + '°F';
			currentDesc.textContent = summary;
			currentIcon.src = 'assets/images/icon/' + icon + '.svg';
			currentIcon.title = daySummary;

			// Weekly forecast.
			for ( let i = 0; i < forecast.length; i++ ) {

				// Select DOM elements.
				const fullName = forecast[i].querySelector( '.fullname' );
				const abbrName = forecast[i].querySelector( '.abbrname' );
				const dayIcon = forecast[i].querySelector( '.dayicon > img' );
				const dayTempMax = forecast[i].querySelector( '.tempmax' );
				const dayTempMin = forecast[i].querySelector( '.tempmin' );

				// Get the day of the week index from UNIX timestamp.
				const dayIndex = new Date( dailyData[i].time * 1000 ).getDay();
				const dayName = weekday[dayIndex];

				// Set DOM elements for weekly forecast.
				fullName.textContent = dayName;
				abbrName.textContent = dayName.slice( 0, 3 );
				dayIcon.src = 'assets/images/icon/' + dailyData[i].icon + '.svg';
				dayIcon.title = dailyData[i].summary;
				dayTempMax.textContent = Math.round( dailyData[i].temperatureMin ) + '°F';
				dayTempMin.textContent = Math.round( dailyData[i].temperatureMax ) + '°F';
			}
		});

	// Weather widget toggle.
	document.addEventListener( 'click', function( event ) {
		const weatherToggle = document.querySelector( '.weathertoggle' );
		const weatherWidget = document.querySelector( '#weather' );
		const primaryMenu = document.querySelector( '#primary-menu' );

		if ( event.target.closest( '.weathertoggle' ) ) {
			if ( weatherWidget.classList.contains( 'is-active' ) ) {
				weatherToggle.setAttribute( 'aria-expanded', 'false' );
				weatherWidget.classList.remove( 'is-active' );
			} else {
				weatherToggle.setAttribute( 'aria-expanded', 'true' );
				weatherWidget.classList.add( 'is-active' );
			}
		}

		if ( event.target.closest( '.menutoggle' ) ) {
			if ( primaryMenu.classList.contains( 'is-active' ) ) {
				weatherWidget.classList.add( 'is-active' );
			} else {
				weatherWidget.classList.remove( 'is-active' );
			}
		}
	}, false );
}() );
