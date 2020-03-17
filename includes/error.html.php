<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="There was an error with the PHP script.">

        <title>Script Error | Ace in the Hole Multisport Event</title>

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
                    <h1 class="heading">PHP Script Error</h1>
                    <p class="subheading">There is an Issue With the PHP Code</p>
                </div>
            </section>

            <section id="content">
                <div class="wrap">
                    <p class="lead-text error"><?php echo $error; ?></p>
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
