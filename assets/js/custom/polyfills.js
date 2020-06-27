/**
 * Add support for modern functionality on older browsers that do not natively support it.
 *
 * @package    ActiveNorthwest
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

// Polyfill for matches() method (IE9+ support).
if ( ! Element.prototype.matches ) {
	Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
}

// Polyfill for closest() method (IE9+ support).
if ( ! Element.prototype.closest ) {
	Element.prototype.closest = function( s ) {
		var el = this;

		do {
			if ( el.matches( s ) ) {
				return el;
			}

			el = el.parentElement || el.parentNode;
		} while ( null !== el && 1 === el.nodeType );

		return null;
	};
}
