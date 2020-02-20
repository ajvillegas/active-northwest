/**
 * The scrolling functionality of the website.
 *
 * @package    AceInTheHole
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {

	// Display Back to Top button when the user scrolls.
	document.addEventListener( 'scroll', function() {
		const topButton = document.querySelector( '.to-top' );

		// Check if user scrolls past 100px from the top of the document.
		if ( 100 < document.body.scrollTop || 100 < document.documentElement.scrollTop ) {

			// Display scroll button.
			topButton.style.display = 'block';
		} else {

			// Hide scroll button.
			topButton.style.display = 'none';
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
