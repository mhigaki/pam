
        </div>
        <!-- Footer start -->
        <?php if ( !is_404() ) : ?>
            <footer class="footer site-footer" id="masterfooter">
                <div class="container footer-inner">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-item">
                                <h4><?php _e( 'Contact Us', 'pam' ); ?></h4>
                                <ul class="contact-info">
                                    <li>
                                        <?php _e( 'Address: 20/F Green Road, Dhanmondi, Dhaka', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <?php _e( 'Email:', 'pam' ); ?>
                                        <a href="mailto:sales@hotelempire.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <?php _e( 'Phone:', 'pam' ); ?>
                                        <a href="tel:+55-417-634-7071"><?php _e( '+0477 85X6 552', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <?php _e( 'Fax: +0477 85X6 552', 'pam' ); ?>
                                    </li>
                                </ul>
                                <ul class="social-list clearfix">
                                    <li>
                                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="rss"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                            <div class="footer-item">
                                <h4> <?php _e( 'Useful Links', 'pam' ); ?> </h4>
                                <ul class="links">
                                    <li>
                                        <a href="#" rel="nofollow noreferrer noopener"><i class="fa fa-angle-right"></i><?php _e( 'Home', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#" rel="nofollow noreferrer noopener"><i class="fa fa-angle-right"></i><?php _e( 'About Us', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#" rel="nofollow noreferrer noopener"><i class="fa fa-angle-right"></i><?php _e( 'Services', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#" rel="nofollow noreferrer noopener"><i class="fa fa-angle-right"></i><?php _e( 'properties Details', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="login.html" rel="nofollow noreferrer noopener"><i class="fa fa-angle-right"></i><?php _e( 'My Account', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#" rel="nofollow noreferrer noopener"><i class="fa fa-angle-right"></i><?php _e( 'Privacy Policy', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a href="#" rel="nofollow noreferrer noopener"><i class="fa fa-angle-right"></i><?php _e( 'properties Details', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                            <div class="footer-item clearfix">
                                <h4> <?php _e( 'Gallery', 'pam' ); ?> </h4>
                                <ul class="gallery">
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-1.jpg" alt="sub-properties"> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-2.jpg" alt="sub-properties"> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-3.jpg" alt="sub-properties"> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-4.jpg" alt="sub-properties"> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-6.jpg" alt="sub-properties"> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-5.jpg" alt="sub-properties"> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-7.jpg" alt="sub-properties"> </a>
                                    </li>
                                    <li>
                                        <a href="#"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-8.jpg" alt="sub-properties"> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-item clearfix">
                                <h4><?php _e( 'Subscribe', 'pam' ); ?></h4>
                                <div class="Subscribe-box">
                                    <p><?php _e( 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.', 'pam' ); ?></p>
                                    <?php $mailer = new PG_Simple_Form_Mailer(); ?>
                                    <?php $mailer->process( array(
                                        	'form_id' => 'teste_mailer_id',
                                        	'send_to_email' => true
                                    ) ); ?>
                                    <?php if( !$mailer->processed || $mailer->error) : ?>
                                        <form action="<?php echo '#teste_mailer_id'; ?>" method="post" id="teste_mailer_id" onsubmit="event.stopImmediatePropagation();event.stopPropagation();">
                                            <p> <input type="text" class="form-contact" name="email" placeholder="Enter Address" value="<?php echo ( isset( $_POST['email'] ) ? $_POST['email'] : '' ); ?>"> </p>
                                            <p> <button type="submit" name="submitNewsletter" class="btn btn-block button-theme">
                                                    <?php _e( 'Subscribe', 'pam' ); ?>
                                                </button> </p>
                                            <input type="hidden" name="teste_mailer_id" value="1"/>
                                        </form>
                                    <?php endif; ?>
                                    <?php if( $mailer->processed ) : ?>
                                        <?php echo $mailer->message; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <p class="copy">© <?php echo date( 'Y' ); ?> <a href="#"><?php _e( 'Theme Vessel.', 'pam' ); ?></a> <?php _e( 'Trademarks and brands are the property of their respective owners.', 'pam' ); ?></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Footer end -->
            <!-- Full Page Search -->
            <div id="full-page-search">
                <button type="button" class="close">×</button>
                <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="search" value="<?php the_search_query(); ?>" placeholder="Procurando por algo" name="s" id="textsearch2"/>
                    <button class="btn btn-sm button-theme" id="searchsubmit" type="submit" value="&lt;?php esc_attr_e( 'Search', 'pam' ); ?&gt;" name="submit">
                        <?php _e( 'Procurar', 'pam' ); ?>
                    </button>
                </form>
            </div>
        <?php endif; ?>
        <!-- Full Page Search -->
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.2.0.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/maps.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/app.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie10-viewport-bug-workaround.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ie10-viewport-bug-workaround.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
