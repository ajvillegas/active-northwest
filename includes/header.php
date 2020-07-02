<?php
// phpcs:disable Generic.Files.LineLength
$base_url = 'https://dev.activenw.com/';
require 'functions.php';
?>

        <div class="utility-bar">
            <div class="wrap">
                <div class="social">
                    <ul class="horizontal">
                        <li class="facebook">
                            <a href="https://www.facebook.com/" title="Facebook">
                                <span class="screen-reader-text">Follow Us on Facebook</span>
                            </a>
                        </li>
                        <li class="twitter">
                            <a href="https://twitter.com/" title="Twitter">
                                <span class="screen-reader-text">Follow Us on Twitter</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="date"><span>Event Date:</span> March 28-29, 2021</div>
            </div>
        </div>

        <header class="site-header">
            <div class="wrap">
                <div class="site-logo">
                    <a href="/">
                        <img src="<?php echo $base_url; ?>assets/images/logo.svg" alt="Active Northwest Logo" />
                    </a>
                </div>

                <div class="nav-wrap">
                    <nav id="navigation" class="nav-menu" aria-label="primary">
                        <button class="menutoggle" aria-haspopup="true" aria-expanded="false" data-menu-id="primary-menu">
                            <span class="navicon"></span>
                            <span class="screen-reader-text">Menu</span>
                        </button>

                        <ul id="primary-menu">
                            <li>
                                <a href="/" class="navlink<?php current_page('');?>">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>about/" class="navlink<?php current_page('about');?>">
                                    <span>About</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>register/" class="navlink<?php current_page('register');?>">
                                    <span>Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>volunteer/" class="navlink<?php current_page('volunteer');?>">
                                    <span>Volunteer</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>gallery/" class="navlink<?php current_page('gallery');?>">
                                    <span>Gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $base_url; ?>contact/" class="navlink<?php current_page('contact');?>">
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div class="weather-widget">
                        <button class="weathertoggle" aria-haspopup="true" aria-expanded="false" title="Weather Forecast">
                            <span class="weathericon"></span>
                            <span class="screen-reader-text">Portland, Oregon Weather Widget</span>
                        </button>

                        <div id="weather" class="weather">
                            <div class="wrap">
                                <div class="weatherinfo">
                                    <div class="current">
                                        <h2 class="location">
                                            <span class="heading">Portland</span>
                                            <span class="subheading">Weather</span>
                                        </h2>

                                        <div class="currenticon">
                                            <img src="<?php echo $base_url; ?>assets/images/icon/clear-day.svg" alt="Weather Condition Icon" title="Weather summary.">
                                        </div>

                                        <div class="conditions">
                                            <div class="temp">0°F</div>
                                            <div class="desc">Conditions</div>
                                        </div>
                                    </div>

                                    <div class="forecast">
                                        <div class="day">
                                            <div class="name">
                                                <span class="fullname">Monday</span>
                                                <span class="abbrname">Mon</span>
                                            </div>

                                            <div class="dayicon">
                                                <img src="<?php echo $base_url; ?>assets/images/icon/clear-day.svg" alt="Weather Condition Icon" title="Weather summary.">
                                            </div>

                                            <div class="temps">
                                                <div class="tempmax">0°F</div>
                                                <div class="tempmin">0°F</div>
                                            </div>
                                        </div>

                                        <div class="day">
                                            <div class="name">
                                                <span class="fullname">Tuesday</span>
                                                <span class="abbrname">Tue</span>
                                            </div>

                                            <div class="dayicon">
                                                <img src="<?php echo $base_url; ?>assets/images/icon/rain.svg" alt="Weather Condition Icon" title="Weather summary.">
                                            </div>

                                            <div class="temps">
                                                <div class="tempmax">0°F</div>
                                                <div class="tempmin">0°F</div>
                                            </div>
                                        </div>

                                        <div class="day">
                                            <div class="name">
                                                <span class="fullname">Wednesday</span>
                                                <span class="abbrname">Wed</span>
                                            </div>

                                            <div class="dayicon">
                                                <img src="<?php echo $base_url; ?>assets/images/icon/partly-cloudy-day.svg" alt="Weather Condition Icon" title="Weather summary.">
                                            </div>

                                            <div class="temps">
                                                <div class="tempmax">0°F</div>
                                                <div class="tempmin">0°F</div>
                                            </div>
                                        </div>

                                        <div class="day">
                                            <div class="name">
                                                <span class="fullname">Thursday</span>
                                                <span class="abbrname">Thu</span>
                                            </div>

                                            <div class="dayicon">
                                                <img src="<?php echo $base_url; ?>assets/images/icon/partly-cloudy-day.svg" alt="Weather Condition Icon" title="Weather summary.">
                                            </div>

                                            <div class="temps">
                                                <div class="tempmax">0°F</div>
                                                <div class="tempmin">0°F</div>
                                            </div>
                                        </div>

                                        <div class="day">
                                            <div class="name">
                                                <span class="fullname">Friday</span>
                                                <span class="abbrname">Fri</span>
                                            </div>

                                            <div class="dayicon">
                                                <img src="<?php echo $base_url; ?>assets/images/icon/rain.svg" alt="Weather Condition Icon" title="Weather summary.">
                                            </div>

                                            <div class="temps">
                                                <div class="tempmax">0°F</div>
                                                <div class="tempmin">0°F</div>
                                            </div>
                                        </div>

                                        <div class="day">
                                            <div class="name">
                                                <span class="fullname">Saturday</span>
                                                <span class="abbrname">Sat</span>
                                            </div>

                                            <div class="dayicon">
                                                <img src="<?php echo $base_url; ?>assets/images/icon/clear-day.svg" alt="Weather Condition Icon" title="Weather summary.">
                                            </div>

                                            <div class="temps">
                                                <div class="tempmax">0°F</div>
                                                <div class="tempmin">0°F</div>
                                            </div>
                                        </div>

                                        <div class="day">
                                            <div class="name">
                                                <span class="fullname">Sunday</span>
                                                <span class="abbrname">Sun</span>
                                            </div>

                                            <div class="dayicon">
                                                <img src="<?php echo $base_url; ?>assets/images/icon/partly-cloudy-day.svg" alt="Weather Condition Icon" title="Weather summary.">
                                            </div>

                                            <div class="temps">
                                                <div class="tempmax">0°F</div>
                                                <div class="tempmin">0°F</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
