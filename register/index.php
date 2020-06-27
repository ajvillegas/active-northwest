<?php
/**
 * This file establishes the database connection and inserts the form data.
 *
 * @package    ActiveNorthwest
 * @author     Alexis J. Villegas
 * @link       http://www.alexisvillegas.com
 * @license    GPL-2.0+
 */

// Connect to the database.
require '../includes/db-connect.php';

// Check if full name has a value and honeypot field is empty.
if (isset($_POST['fullname']) && empty($_POST['honeypot'])) {
    // Define submitted values.
    $name           = $_POST['fullname'];
    $email          = $_POST['email'];
    $age            = $_POST['age'];
    $gender         = $_POST['gender'];
    $ename          = $_POST['ename'];
    $ephone         = $_POST['ephone'];
    $sat_event      = $_POST['sat_event'];
    $sun_event      = $_POST['sun_event'];
    $size           = $_POST['techsize'];
    $accommodations = $_POST['accommodations'];

    // Insert data into the database.
    try {
        $sql = 'INSERT INTO registrations SET
            fullname       = :fullname,
            email          = :email,
            age            = :age,
            gender         = :gender,
            ename          = :ename,
            ephone         = :ephone,
            sat_event      = :sat_event,
            sun_event      = :sun_event,
            techsize       = :techsize,
            accommodations = :accommodations';
        $s = $pdo->prepare($sql);
        $s->bindValue(':fullname', $name);
        $s->bindValue(':email', $email);
        $s->bindValue(':age', $age);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':ename', $ename);
        $s->bindValue(':ephone', $ephone);
        $s->bindValue(':sat_event', $sat_event);
        $s->bindValue(':sun_event', $sun_event);
        $s->bindValue(':techsize', $size);
        $s->bindValue(':accommodations', $accommodations);
        $s->execute();
    } catch (PDOException $e) {
        $error = 'Error adding submitted registration: ' . $e->getMessage();
        require '../includes/error.html.php';
        exit();
    }

    // Load the thank you page after the INSERT runs.
    require 'success-register.html.php';
} else {
    require 'register.html.php';
}
