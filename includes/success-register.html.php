<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="You successfully registered for an event.">

        <title>Successful Registration | Ace in the Hole Multisport Event</title>

        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:700%7CSource+Sans+Pro:400,600,700&display=swap">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <ul class="skip-links">
            <li>
                <a class="screen-reader-text" href="#navigation">Skip to navigation</a>
            </li>
            <li>
                <a class="screen-reader-text" href="#content">Skip to content</a>
            </li>
            <li>
                <a class="screen-reader-text" href="#footer">Skip to footer</a>
            </li>
        </ul>
        <?php require 'includes/header.php'; ?>

        <main class="site-inner">
            <section class="hero-image -register">
                <div class="wrap">
                    <h1 class="heading">Thank You for Registering</h1>
                    <p class="subheading">You Successfully Registered For an Event</p>
                </div>
            </section>

            <section id="content">
                <div class="wrap">
                    <p class="lead-text">Our records show you submitted the following:</p>

                    <div class="table-wrap">
                        <table class="min-500">
                            <tr>
                                <th>Form Field</th>
                                <th>Data</th>
                            </tr>
                            <tr>
                                <td>Full Name</td>
                                <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Age</td>
                                <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Emergency Contact</td>
                                <td><?php echo htmlspecialchars($ename, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Emergency Phone Number</td>
                                <td><?php echo htmlspecialchars($ephone, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Saturday Event</td>
                                <td><?php echo htmlspecialchars($sat_event, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Sunday Event</td>
                                <td><?php echo htmlspecialchars($sun_event, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Tech Shirt Size</td>
                                <td><?php echo htmlspecialchars($size, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Special Accommodations</td>
                                <td><?php echo htmlspecialchars($accommodations, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                        </table>
                    </div>

                    <p>Please remember that payment will be submitted during the course packet pick up at <a href="https://www.google.com/maps/place/123+NW+Everett+St,+Portland,+OR+97209/@45.5256439,-122.6742046,17z/data=!3m1!4b1!4m5!3m4!1s0x5495a0aa74a759fd:0x54517259a8f0e3b3!8m2!3d45.5256402!4d-122.6720159">Why Worry Racing, 123 NW Everett, Portland OR</a>.</p>

                    <p>Pick up hours are Thursdays from 8 AM - 5 PM, and Fridays from 9 AM - 12 PM. <strong>No day of event packet pick up</strong>.</p>
                </div>
            </section>
        </main>
        <?php require 'includes/footer.php'; ?>
        <script>
            // Remove $_POST parameters from URL.
            ( function() {
                window.history.replaceState({}, document.title, '/cas222/project/<?php echo basename($_SERVER['PHP_SELF']); ?>' );
            }() );
        </script>
    </body>

</html>
