/**
 * Calculate the current year and update it in the footer.
 *
 * @package    ActiveNorthwest
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {
	const footerYear = document.querySelector( '#year' );
	const currentYear = new Date().getFullYear();

	if ( footerYear && ( currentYear !== footerYear.innerText ) ) {
		footerYear.innerText = currentYear;
	}
}() );
