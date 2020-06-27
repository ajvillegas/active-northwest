<?php
/**
 * This file defines the PHP helper functions.
 *
 * @package    ActiveNorthwest
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

/**
 * Assign the .currentpage class based on the current URL slug.
 *
 * @param string $page The page URL slug name.
 */
function current_page($page)
{
    $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
    $url_slug = $url_array[count($url_array)-2];

    if ($page === $url_slug) {
        echo ' currentpage';
    }
}
