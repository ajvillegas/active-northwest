/**
 * The scrolling functionality of the website.
 *
 * @package    Nucleo
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {

	// Display Back to Top button and toggle header class when the user scrolls.
	document.addEventListener( 'scroll', function() {
		const siteHeader = document.querySelector( '.site-header' );
		const menu = document.querySelector( '#primary-menu' );
		const topButton = document.querySelector( '.to-top' );

		// Check if user scrolls past 100px from the top of the document.
		if ( 100 < document.body.scrollTop || 100 < document.documentElement.scrollTop ) {

			// Display scroll button.
			topButton.style.display = 'block';

			// Add .is-active class to header.
			siteHeader.classList.add( 'is-active' );
		} else {

			// Hide scroll button.
			topButton.style.display = 'none';

			// Toggle .is-active header class.
			if ( menu.classList.contains( 'is-active' ) ) {
				siteHeader.classList.add( 'is-active' );
			} else {
				siteHeader.classList.remove( 'is-active' );
			}
		}
	}, false );

	// Scroll to top of page when the user clicks the Back to Top button.
	document.addEventListener( 'click', function( event ) {
		if ( event.target.matches( '.to-top' ) ) {
			const element = document.querySelector( 'body' ).offsetTop;

			window.scroll({
				top: element,
				left: 0,
				behavior: 'smooth'
			});
		}
	}, false );
}() );
