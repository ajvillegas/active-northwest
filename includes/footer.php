<?php // phpcs:disable Generic.Files.LineLength ?>

        <footer id="footer" class="site-footer">
            <div class="widgets wrap">
                <div class="first one-third contact">
                    <h4>Contact Us</h4>

                    <div class="address">
                        <p>
                            123 NW Everett Street<br>
                            Portland, OR 97209
                        </p>
                    </div>

                    <div class="phone">
                        <a href="tel:9715552484">(971) 555-2484</a>
                    </div>

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
                </div>

                <div class="one-third footernav">
                    <h4>Quick Links</h4>

                    <nav aria-label="footer">
                        <ul>
                            <li>
                                <a href="/"><span>Home</span></a>
                            </li>
                            <li>
                                <a href="/register/"><span>Register</span></a>
                            </li>
                            <li>
                                <a href="/gallery/"><span>Gallery</span></a>
                            </li>
                            <li>
                                <a href="/about/"><span>About</span></a>
                            </li>
                            <li>
                                <a href="/volunteer/"><span>Volunteer</span></a>
                            </li>
                            <li>
                                <a href="/contact/"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="one-third map">
                    <h4>Event Location</h4>

                    <div class="google-map"></div>
                </div>
            </div>

            <div class="credits">
                <p>
                    Copyright &copy; <span id="year">2020</span> Active Northwest <br><span>|</span> Website by
                    <a href="http://www.alexisvillegas.com/">AJV</a>
                </p>

                <p class="attribution">Weather Data <a href="https://darksky.net/poweredby/">Powered by Dark Sky</a> API</p>
            </div>
        </footer>

        <button title="Back to Top" class="to-top">
            <span class="screen-reader-text">Back to top</span>
            <span class="arrow-up"></span>
        </button>

        <script src="//maps.google.com/maps/api/js?key=AIzaSyDZXlksw2XKFvmh3i3Zw7NDzjfgir9N8DI"></script>
        <script src="<?php echo $base_url; ?>assets/js/custom.min.js"></script>
