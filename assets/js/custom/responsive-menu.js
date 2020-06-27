/**
 * The mobile responsive menu functionality of the website.
 *
 * @package    ActiveNorthwest
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

( function() {

	// Add .js class to the <html> tag.
	document.getElementsByTagName( 'html' )[0].setAttribute( 'class', 'js' );

	// Helper function to use forEach() method on a NodeList.
	const forEach = function( array, callback ) {
		Array.prototype.forEach.call( array, callback );
	};

	// Helper function to close the mobile menu or submenu.
	const closeMenu = function( toggle, nav, header ) {
		toggle.setAttribute( 'aria-expanded', 'false' );
		nav.classList.remove( 'is-active' );

		// Check if header parameter is provided and on #primary-menu.
		if ( undefined !== header && 'primary-menu' === nav.id ) {
			header.classList.remove( 'is-active' );
		}
	};

	// Helper function to expand the mobile menu or submenu.
	const expandMenu = function( toggle, nav, header ) {
		toggle.setAttribute( 'aria-expanded', 'true' );
		nav.classList.add( 'is-active' );

		// Check if header parameter is provided and on #primary-menu.
		if ( undefined !== header && 'primary-menu' === nav.id ) {
			header.classList.add( 'is-active' );
		}
	};

	const siteHeader = document.querySelector( '.site-header' );
	const menuAll = document.querySelectorAll( '.nav-menu > ul' );
	const submenuToggleAll = document.querySelectorAll( '.submenutoggle' );
	const submenuAll = document.querySelectorAll( '.nav-menu .submenu ul' );
	const submenuItemsAll = document.querySelectorAll( '.nav-menu .submenu ul li a' );

	// Set tabindex on all submenu items.
	forEach( submenuItemsAll, function( link ) {
		link.setAttribute( 'tabindex', '-1' );
	});

	document.addEventListener( 'click', function( event ) {

		// Mobile menu toggle.
		if ( event.target.closest( '.menutoggle' ) ) {
			const menuToggle = event.target.closest( '.menutoggle' );
			const menu = document.querySelector( '#' + menuToggle.dataset.menuId ); // Get the string from the data-menu-id attribute.

			if ( menu.classList.contains( 'is-active' ) ) {
				closeMenu( menuToggle, menu, siteHeader );
			} else {
				expandMenu( menuToggle, menu, siteHeader );
			}
		}

		// Close the mobile menu when a user clicks on a link.
		if ( event.target.closest( '.navlink' ) ) {
			const menu = event.target.closest( '.submenu' ) ? event.target.closest( '.submenu' ).parentElement : event.target.closest( 'ul' );
			const menuToggle = menu.previousElementSibling.closest( '.menutoggle' );

			closeMenu( menuToggle, menu, siteHeader );
		}

		// Submenu toggle.
		if ( event.target.closest( '.submenutoggle' ) ) {
			const submenuToggle = event.target.closest( '.submenutoggle' );
			const submenu = document.querySelector( '#' + submenuToggle.dataset.submenuId ); // Get the string from the data-submenu-id attribute.

			// Prevent default link behavior.
			event.preventDefault();

			if ( submenu.classList.contains( 'is-active' ) ) {
				closeMenu( submenuToggle, submenu );
			} else {
				expandMenu( submenuToggle, submenu );
			}
		}

		// Close all submenus when clicking outside the submenu toggle.
		if ( ! event.target.closest( '.submenutoggle' ) ) {
			forEach( submenuToggleAll, function( toggle ) {
				toggle.setAttribute( 'aria-expanded', 'false' );
			});

			forEach( submenuAll, function( menu ) {
				menu.classList.remove( 'is-active' );
			});
		}
	}, false );

	document.addEventListener( 'keydown', function( event ) {

		// Reset tabindex on all submenu items.
		if ( event.target.closest( '.submenutoggle' ) ) {
			const submenuToggle = event.target.closest( '.submenutoggle' );
			const submenu = document.querySelector( '#' + submenuToggle.dataset.submenuId ); // Get the string from the data-submenu-id attribute.
			const submenuItems = submenu.querySelectorAll( 'li a' );

			forEach( submenuItems, function( link ) {
				if ( submenu.classList.contains( 'is-active' ) ) {
					link.setAttribute( 'tabindex', '0' );
				} else {
					link.setAttribute( 'tabindex', '-1' );
				}
			});
		}

		// Close all submenus with the escape key.
		if ( 'Escape' === event.key || 'Esc' === event.key ) {
			forEach( submenuAll, function( menu ) {
				if ( menu.classList.contains( 'is-active' ) ) {
					menu.classList.remove( 'is-active' );

					forEach( submenuToggleAll, function( toggle ) {
						toggle.setAttribute( 'aria-expanded', 'false' );
					});

					forEach( submenuItemsAll, function( link ) {
						link.setAttribute( 'tabindex', '-1' );
					});
				}
			});
		}
	}, false );

	document.addEventListener( 'focusin', function( event ) {

		// Close mobile menu after tabbing off menu items.
		forEach( menuAll, function( menu ) {
			const mobileMenu = document.querySelector( '#' + menu.id );
			const menuToggle = mobileMenu.previousElementSibling.closest( '.menutoggle' );

			// Bail if target element is a menu toggle button.
			if ( event.target.closest( '.menutoggle' ) ) {
				return;
			}

			// Check if mobile menu contains any child element on focus.
			if ( ! mobileMenu.contains( document.activeElement ) ) {
				closeMenu( menuToggle, menu, siteHeader );
			}
		});

		// Close submenu and reset tabindex after tabbing off submenu items.
		forEach( submenuAll, function( menu ) {
			const submenu = document.querySelector( '#' + menu.id );
			const submenuToggle = submenu.previousElementSibling.closest( '.submenutoggle' );
			const submenuItems = submenu.querySelectorAll( 'li a' );

			// Bail if target element is a submenu toggle link.
			if ( event.target.closest( '.submenutoggle' ) ) {
				return;
			}

			// Check if submenu contains any child element on focus.
			if ( ! menu.contains( document.activeElement ) ) {
				closeMenu( submenuToggle, submenu );

				// Reset tabindex.
				forEach( submenuItems, function( link ) {
					link.setAttribute( 'tabindex', '-1' );
				});
			}
		});
	}, false );
}() );
