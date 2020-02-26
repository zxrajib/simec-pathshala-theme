 <!---------------- Footer ----------------->
 <footer class="footer_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <img class="img-fluid" src="<?php echo bloggermart_THEMEROOT ?>/assets/img/logo.png" alt="" />
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_columnn">
                        <h2>Site Map</h2>
                        <div class="sitemap_link">
                        <?php
                                $args = array(
                                    'menu'            => '',
                                    'container'       => 'false',
                                    'theme_location' => 'primary',
                                    'container_class' => '',
                                    'menu_class' => ''
                                );
                                wp_nav_menu($args);
                             ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_columnn">
                        <h2>Contact Us</h2>
                        <p>We have highly configurable options available in the system. It definitely helps us to maximize customization within the 
                            system.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer_columnn">
                        <h2>Stay in touch</h2>
                        <div class="social_sec">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo bloggermart_THEMEROOT ?>/assets/img/fb.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo bloggermart_THEMEROOT ?>/assets/img/whatsapp.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo bloggermart_THEMEROOT ?>/assets/img/twitter.png" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="img-fluid" src="<?php echo bloggermart_THEMEROOT ?>/assets/img/instragram.png" alt="">
                                    </a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>