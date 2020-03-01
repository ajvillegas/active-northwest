/**
 * Add .currentpage class to menu items based on the URL.
 *
 * @package    AceInTheHole
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {

	// Break up up the URL pathname by '/' characters.
	const urlPaths = window.location.pathname.split( '/' );

	// Get the last item in the array to get the current page.
	const currentPage = urlPaths[urlPaths.length - 1];

	// Select all main navigation links.
	const navLinks = document.querySelectorAll( '.navlink' );

	// Select the home link (first one).
	const homeLink = document.querySelector( '.navlink' );

	// Define the home URL.
	const homeURL = window.location.protocol + '//' + window.location.hostname + '/cas222/project/';

	// Get the URL of the current page.
	const documentURL = window.location.href;

	if ( documentURL === homeURL ) {
		homeLink.className += ' currentpage';
	}

	for ( let i = 0; i < navLinks.length; i++ ) {
		if ( currentPage === navLinks[i].getAttribute( 'href' ) ) {
			navLinks[i].className += ' currentpage';
		}
	}
}() );
