<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Here you will find photos from previous Active Northwest Multisport weekend events.">

        <title>Photo Gallery | Active Northwest Multisport Event</title>

        <link rel="shortcut icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:700%7CSource+Sans+Pro:400,600,700&display=swap">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body class="gallery">
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
        <?php require '../includes/header.php'; ?>

        <main class="site-inner">
            <section class="hero-image -gallery">
                <div class="wrap">
                    <h1 class="heading">Event Photo Gallery</h1>
                    <p class="subheading">Photos From Previous Events</p>
                </div>
            </section>

            <section id="content">
                <div class="wrap">
                    <div class="masonry-gallery">
                        <figure class="brick">
                            <a href="../assets/images/gallery/ace2.jpg">
                                <img src="../assets/images/gallery/ace2.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace1.jpg">
                                <img src="../assets/images/gallery/ace1.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace3.jpg">
                                <img src="../assets/images/gallery/ace3.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace4.jpg">
                                <img src="../assets/images/gallery/ace4.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace5.jpg">
                                <img src="../assets/images/gallery/ace5.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace6.jpg">
                                <img src="../assets/images/gallery/ace6.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace7.jpg">
                                <img src="../assets/images/gallery/ace7.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace8.jpg">
                                <img src="../assets/images/gallery/ace8.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace9.jpg">
                                <img src="../assets/images/gallery/ace9.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace10.jpg">
                                <img src="../assets/images/gallery/ace10.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace11.jpg">
                                <img src="../assets/images/gallery/ace11.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace12.jpg">
                                <img src="../assets/images/gallery/ace12.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace13.jpg">
                                <img src="../assets/images/gallery/ace13.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace14.jpg">
                                <img src="../assets/images/gallery/ace14.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace15.jpg">
                                <img src="../assets/images/gallery/ace15.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace16.jpg">
                                <img src="../assets/images/gallery/ace16.jpg" alt="Past Event Participants">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace17.jpg">
                                <img src="../assets/images/gallery/ace17.jpg" alt="Past Event Participants">
                            </a>
                        </figure>
                    </div>
                </div>
            </section>
        </main>
        <?php require '../includes/footer.php'; ?>
        <script src="//cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.0/baguetteBox.min.js"></script>
        <script>
            ( function() {
                baguetteBox.run( '.masonry-gallery' );
            }() );
        </script>
    </body>

</html>
