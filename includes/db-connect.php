<?php
/**
 * This file establishes the database connection.
 *
 * @package    ActiveNorthwest
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

// Import constants.
require 'constants.php';

try {
    $pdo = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    $error = 'Unable to connect to the database server.';
    require 'error.html.php';
    exit();
}
