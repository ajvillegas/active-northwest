<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="There was a 404 error. Page not found.">
        <base href="https://dev.activenw.com/">

        <title>404 Error | Active Northwest Multisport Event</title>

        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:700%7CSource+Sans+Pro:400,600,700&display=swap">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body>
        <ul class="skip-links">
            <li>
                <a class="screen-reader-text" href="/#navigation">Skip to navigation</a>
            </li>
            <li>
                <a class="screen-reader-text" href="/#content">Skip to content</a>
            </li>
            <li>
                <a class="screen-reader-text" href="/#footer">Skip to footer</a>
            </li>
        </ul>
        <?php require 'includes/header.php'; ?>

        <main class="site-inner">
            <section class="hero-image -notfound">
                <div class="wrap">
                    <h1 class="heading">Yikes! Something Went Wrong</h1>
                    <p class="subheading">404 Error: Page Not Found</p>
                </div>
            </section>

            <section id="content">
                <div class="wrap">
                    <p class="lead-text">The page you are looking for doesn't exist.</p>

                    <p> Try to go back to the <a href="/">homepage</a> and see if you can find what you are looking for, or browse the sitemap below to go to a specific page on the site.</p>

                    <hr>

                    <h2>Sitemap</h2>

                    <ul class="default-ul">
                        <li>
                            <a href="/"><span>Home</span></a>
                        </li>
                        <li>
                            <a href="/about/"><span>About</span></a>
                        </li>
                        <li>
                            <a href="/register/"><span>Register</span></a>
                        </li>
                        <li>
                            <a href="/volunteer/"><span>Volunteer</span></a>
                        </li>
                        <li>
                            <a href="/gallery/"><span>Gallery</span></a>
                        </li>
                        <li>
                            <a href="/contact/"><span>Contact</span></a>
                        </li>
                    </ul>
                </div>
            </section>
        </main>
        <?php require 'includes/footer.php'; ?>
    </body>

</html>
