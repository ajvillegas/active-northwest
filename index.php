<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Ace in the Hole Multisport Events offers running and triathlon events to athletes of all shapes and sizes, nationality, gender and cultural backgrounds.">

        <title>Ace in the Hole Multisport Event</title>

        <link rel="shortcut icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:700%7CSource+Sans+Pro:400,600,700&display=swap">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body class="home">
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
            <section class="hero-image -home">
                <div class="wrap">
                    <h1 class="heading">AITH Multisport Event Weekend</h1>
                    <p class="subheading">Registration is Now Open</p>

                    <div class="cta-buttons">
                        <a class="button -ghost" href="about.php">Learn More</a>
                        <a class="button" href="register.php">Register</a>
                    </div>

                    <i class="scroll-arrow"></i>
                </div>
            </section>

            <section id="content" class="image-links section-padding">
                <div class="wrap">
                    <div class="imagebox">
                        <a href="about.php#itinerary">
                            <img src="assets/images/image-link1.jpg" alt="Itinerary Image Link">
                            <h3 class="heading">Itinerary</h3>
                        </a>
                    </div>

                    <div class="imagebox">
                        <a href="about.php#course">
                            <img src="assets/images/image-link2.jpg" alt="Course Details Image Link">
                            <h3 class="heading">Course</h3>
                        </a>
                    </div>

                    <div class="imagebox">
                        <a href="volunteer.php">
                            <img src="assets/images/image-link3.jpg" alt="Volunteer Image Link">
                            <h3 class="heading">Volunteer</h3>
                        </a>
                    </div>
                </div>
            </section>

            <section class="cta-section -nomargin">
                <div class="wrap">
                    <h2 class="heading">Be a Part of The Big Event</h2>
                    <p>Registration is still open. Save your spot today!</p>

                    <a href="register.php" class="button -large">Register Now</a>
                </div>
            </section>

            <section class="section-padding home-gallery">
                <div class="wrap">
                    <h2 class="heading">Visit Our Gallery</h2>

                    <div class="masonry-gallery">
                        <figure class="brick">
                            <a href="assets/images/gallery/ace2.jpg">
                                <img src="assets/images/gallery/ace2.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="assets/images/gallery/ace1.jpg">
                                <img src="assets/images/gallery/ace1.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="assets/images/gallery/ace3.jpg">
                                <img src="assets/images/gallery/ace3.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="assets/images/gallery/ace4.jpg">
                                <img src="assets/images/gallery/ace4.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="assets/images/gallery/ace5.jpg">
                                <img src="assets/images/gallery/ace5.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="assets/images/gallery/ace6.jpg">
                                <img src="assets/images/gallery/ace6.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="assets/images/gallery/ace7.jpg">
                                <img src="assets/images/gallery/ace7.jpg" alt="Past Event Participants">
                            </a>
                        </figure>
                    </div>

                    <a href="gallery.php" class="gallery-link">View Gallery</a>
                </div>
            </section>
        </main>
        <?php require 'includes/footer.php'; ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
        <script>
            ( function() {
                baguetteBox.run( '.masonry-gallery' );
            }() );
        </script>
    </body>

</html>
