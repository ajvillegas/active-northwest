<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="You successfully contacted us.">

        <title>Contact US | Ace in the Hole Multisport Event</title>

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
            <section class="hero-image">
                <div class="wrap">
                    <h1 class="heading">Thank You for Contacting Us</h1>
                    <p class="subheading">Your Email was Sent Successfully</p>
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
                                <td>Contact Type</td>
                                <td><?php echo htmlspecialchars($type, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></td>
                            </tr>
                        </table>
                    </div>

                    <p>We will get in touch with you shortly!</p>
                </div>
            </section>
        </main>
        <?php require 'includes/footer.php'; ?>
        <script>
            // Remove $_POST parameters from URL.
            ( function() {
                window.history.replaceState({}, document.title, "/cas222/project/contact.php" );
            }() );
        </script>
    </body>

</html>
