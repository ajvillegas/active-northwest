/**
 * Fix the hero image fixed background on mobile devices.
 *
 * @package    AceInTheHole
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {
	const hero = document.querySelector( '.hero-image' );

	function isMobileDevice() {
		return 'undefined' !== typeof window.orientation || -1 !== navigator.userAgent.indexOf( 'IEMobile' );
	}

	if ( isMobileDevice() ) {

		// Add inline styles to fix the background attachment.
		hero.style.backgroundAttachment = 'scroll';
	}
}() );
