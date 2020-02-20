/**
 * Calculate the current year and update it in the footer.
 *
 * @package    AceInTheHole
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {
	const element = document.querySelector( '#year' );
	const currentYear = new Date().getFullYear();

	if ( element && ( currentYear !== element.innerHTML ) ) {
		element.innerHTML = currentYear;
	}
}() );
