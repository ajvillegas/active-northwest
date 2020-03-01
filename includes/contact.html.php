<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="We love to hear from you. Use the form in this page to get in touch with any general inquires.">

        <title>Contact Us | Ace in the Hole Multisport Event</title>

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
                    <h1 class="heading">Contact Us</h1>
                    <p class="subheading">Feel Free to Get in Touch</p>
                </div>
            </section>

            <section id="content">
                <div class="wrap">
                    <p class="lead-text">We love to hear from you!</p>

                    <p>Please use the form below to get in touch with any questions regarding the event, volunteering opportunities, sponsorships, or any general inquiries you might have.</p>
                    <hr>
                </div>
            </section>

            <section>
                <div class="wrap">
                    <fieldset>
                        <form method="post" action="">
                            <h3>Contact Form</h3>

                            <input type="hidden" name="honeypot" id="honeypot" value="" alt="If you fill this field out your form will not be submitted.">

                            <div class="clearfix">
                                <p class="first one-half">
                                    <label for="c_fullname">Full Name:<span class="required">*</span></label>
                                    <input type="text" name="c_fullname" id="c_fullname" placeholder="First and last name" required>
                                </p>

                                <p class="one-half">
                                    <label for="c_email">Email:<span class="required">*</span></label>
                                    <input type="email" name="c_email" id="c_email" required>
                                </p>
                            </div>

                            <p>
                                <label for="c_type">Contact Type:<span class="required">*</span></label>
                                <select class="full-width" name="c_type" id="c_type" required>
                                    <option value="" disabled selected>Choose One</option>
                                    <option value="Athlete">Athlete</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Interested Party">Interested Party</option>
                                </select>
                            </p>

                            <p>
                                <label for="c_message">Message:<span class="required">*</span></label>
                                <textarea name="c_message" id="c_message" rows="8" required></textarea>
                            </p>

                            <p>
                                <input type="submit" value="Submit">
                            </p>
                        </form>
                    </fieldset>
                </div>
            </section>
        </main>
        <?php require 'includes/footer.php'; ?>
    </body>

</html>
