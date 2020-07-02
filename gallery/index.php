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
                                <img src="../assets/images/gallery/ace2.jpg" alt="Older woman walks on marathon competition with the help of crutches.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace1.jpg">
                                <img src="../assets/images/gallery/ace1.jpg" alt="Group of triathlon competitors rush to the water to begin the swiming portion.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace3.jpg">
                                <img src="../assets/images/gallery/ace3.jpg" alt="A cyclist celebrates his approach to the finish line with extended arms in front of the other competitors.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace4.jpg">
                                <img src="../assets/images/gallery/ace4.jpg" alt="Group of swimmers in wetsuits run to the water to begin the swimming race.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace5.jpg">
                                <img src="../assets/images/gallery/ace5.jpg" alt="Cyclists ride in front of the sun on a clear day with blue skies.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace6.jpg">
                                <img src="../assets/images/gallery/ace6.jpg" alt="Three triathlon competitors pose together for the camera on a beach.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace7.jpg">
                                <img src="../assets/images/gallery/ace7.jpg" alt="A female runner high-fives expectators as she approaches the finish line.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace8.jpg">
                                <img src="../assets/images/gallery/ace8.jpg" alt="Woman running on a dirt road ahead of the competition pack smiling for the camera.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace9.jpg">
                                <img src="../assets/images/gallery/ace9.jpg" alt="A group of competitors on racing wheelchairs approach the finish line.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace10.jpg">
                                <img src="../assets/images/gallery/ace10.jpg" alt="A runner crossing the finish line first celebrates with extended arms.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace11.jpg">
                                <img src="../assets/images/gallery/ace11.jpg" alt="A camera shot of runners on a race from the waist down.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace12.jpg">
                                <img src="../assets/images/gallery/ace12.jpg" alt="A group of racing cyclists powering through a corner.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace13.jpg">
                                <img src="../assets/images/gallery/ace13.jpg" alt="A group of young running competitors wearing jerseys begin to race.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace14.jpg">
                                <img src="../assets/images/gallery/ace14.jpg" alt="Female track and field competitors race on a track.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace15.jpg">
                                <img src="../assets/images/gallery/ace15.jpg" alt="A fit older man running a marathon wearing a white sports hat and jersey.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace16.jpg">
                                <img src="../assets/images/gallery/ace16.jpg" alt="A large group of runners wearing orange long-sleeve jerseys move through a corner in a race.">
                            </a>
                        </figure>

                        <figure class="brick">
                            <a href="../assets/images/gallery/ace17.jpg">
                                <img src="../assets/images/gallery/ace17.jpg" alt="Marathon runners exiting a road tunnel viewed from the top street level.">
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
