<?php // phpcs:disable Generic.Files.LineLength ?>
<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Athletes can register here to participate in one of the many sport events we host over the weekend.">

        <title>Event Registration | Active Northwest Multisport Event</title>

        <link rel="shortcut icon" href="../assets/images/favicon.png">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:700%7CSource+Sans+Pro:400,600,700&display=swap">
        <link rel="stylesheet" href="../assets/css/style.css">
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
        <?php require '../includes/header.php'; ?>

        <main class="site-inner">
            <section class="hero-image -register">
                <div class="wrap">
                    <h1 class="heading">Event Registration</h1>
                    <p class="subheading">Register to Participate in One of Our Events</p>
                </div>
            </section>

            <section id="content">
                <div class="wrap">
                    <h2>The Annual ANW Multisport Weekend Spring 2021</h2>

                    <p class="lead-text">Ready to register? We have something for every level of athletic ability.</p>

                    <p>The weekend includes a first timer triathlon, a sprint, olympic, half-iron triathlons, 10K and half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>

                    <hr>

                    <h3>Registration Cost</h3>

                    <table>
                        <tr>
                            <th>Event</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>Long Course Triathlon</td>
                            <td><strong>$240</strong></td>
                        </tr>
                        <tr>
                            <td>Olympic Triathlon</td>
                            <td><strong>$110</strong></td>
                        </tr>
                        <tr>
                            <td>10K Run</td>
                            <td><strong>$50</strong></td>
                        </tr>
                        <tr>
                            <td>Half Marathon</td>
                            <td><strong>$75</strong></td>
                        </tr>
                        <tr>
                            <td>Sprint Triathlon</td>
                            <td><strong>$90</strong></td>
                        </tr>
                        <tr>
                            <td>Try-a-Tri</td>
                            <td><strong>$65</strong></td>
                        </tr>
                        <tr>
                            <td>Splash n' Dash</td>
                            <td><strong>$25<br>(Free if an adult registers for an event)</strong></td>
                        </tr>
                    </table>

                    <p><strong>Cost Includes:</strong></p>

                    <ul class="default-ul">
                        <li>Food and beer.</li>
                        <li>Access to the weekend's live entertainment & fitness expo.</li>
                        <li>Commemorative finisher medal.</li>
                        <li>Accurate chip timing for competitive races.</li>
                        <li>Active Northwest Multisport Weekend tech shirt (guaranteed to pre-registered participants only).</li>
                        <li>Post-event party and entertainment.</li>
                    </ul>

                    <hr>

                    <h3>Registration Details</h3>

                    <ul class="default-ul">
                        <li>The registration <strong>deadline is March 21st 2021</strong>, or earlier if capacity is reached.</li>
                        <li>Payment will be submitted during the course packet pick up at <a href="https://www.google.com/maps/place/123+NW+Everett+St,+Portland,+OR+97209/@45.5256439,-122.6742046,17z/data=!3m1!4b1!4m5!3m4!1s0x5495a0aa74a759fd:0x54517259a8f0e3b3!8m2!3d45.5256402!4d-122.6720159">Why Worry Racing, 123 NW Everett, Portland OR</a>.</li>
                        <li>Packet pick up hours: Thursday 8 AM - 5 PM, Friday 9 AM - 12 PM. <strong>No day of event packet pick up</strong>.</li>
                    </ul>

                    <hr>
                </div>
            </section>

            <section>
                <div class="wrap">
                    <fieldset>
                        <form method="post" action="">
                            <h3>Registration Form</h3>

                            <p>Plese fill out the form below to register for an event. Fields marked with an asterisk (<span class="required">*</span>) are required.</p>

                            <input type="hidden" name="honeypot" id="honeypot" value="">

                            <div class="clearfix">
                                <p class="first one-half">
                                    <label for="fullname">Full Name:<span class="required">*</span></label>
                                    <input type="text" name="fullname" id="fullname" placeholder="First and last name" required>
                                </p>

                                <p class="one-half">
                                    <label for="email">Email:<span class="required">*</span></label>
                                    <input type="email" name="email" id="email" required>
                                </p>
                            </div>

                            <div class="clearfix">
                                <p class="first one-half">
                                    <label for="age">Age:<span class="required">*</span></label>
                                    <input type="number" min="1" max="100" name="age" id="age" required>
                                </p>

                                <p class="one-half">
                                    <label for="gender">I Identify my Gender as:</label>
                                    <select class="full-width" name="gender" id="gender">
                                        <option value="" disabled selected>Choose Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Genderqueer/Non-binary">Genderqueer/Non-binary</option>
                                        <option value="Not disclosed">Prefer not to disclose</option>
                                    </select>
                                </p>
                            </div>

                            <div class="clearfix">
                                <p class="first one-half">
                                    <label for="ename">Emergency Contact:<span class="required">*</span></label>
                                    <input type="text" name="ename" id="ename" placeholder="Contact name" required>
                                </p>

                                <p class="one-half">
                                    <label for="ephone">Emergency Phone Number:<span class="required">*</span></label>
                                    <input type="tel" name="ephone" id="ephone" placeholder="Contact phone number" required>
                                </p>
                            </div>

                            <div class="clearfix">
                                <p class="first one-half">
                                    <label for="sat_event">Saturday Event:<span class="required">*</span></label>
                                    <select class="full-width" name="sat_event" id="sat_event" required>
                                        <option value="" disabled selected>Choose Event</option>
                                        <option value="Long Course Triathlon">Long Course Triathlon</option>
                                        <option value="Olympic Triathlon">Olympic Triathlon</option>
                                        <option value="10K">10K</option>
                                        <option value="Half Marathon">Half Marathon</option>
                                        <option value="None">None</option>
                                    </select>
                                </p>

                                <p class="one-half">
                                    <label for="sun_event">Sunday Event:<span class="required">*</span></label>
                                    <select class="full-width" name="sun_event" id="sun_event" required>
                                        <option value="" disabled selected>Choose Event</option>
                                        <option value="Sprint Triathlon">Sprint Triathlon</option>
                                        <option value="Try-a-Tri">Try-a-Tri</option>
                                        <option value="Splash n' Dash">Splash n' Dash</option>
                                        <option value="None">None</option>
                                    </select>
                                </p>
                            </div>

                            <p>
                                <label for="techsize">Tech Shirt Size:<span class="required">*</span></label>
                                <select class="full-width" name="techsize" id="techsize" required>
                                    <option value="" disabled selected>Choose Size</option>
                                    <option value="Small">Small</option>
                                    <option value="Medium">Medium</option>
                                    <option value="Large">Large</option>
                                    <option value="X-Large">X-Large</option>
                                    <option value="XX-Large">XX-Large</option>
                                </select>
                            </p>

                            <p>
                                <label for="accommodations">Special Accommodations:</label>
                                <textarea name="accommodations" id="accommodations" rows="4"></textarea>
                            </p>

                            <p>
                                <input type="submit" value="Submit">
                            </p>
                        </form>
                    </fieldset>
                </div>
            </section>
        </main>
        <?php require '../includes/footer.php'; ?>
    </body>

</html>
