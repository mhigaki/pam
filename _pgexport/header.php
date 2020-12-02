<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="author" content="MNH">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <div class="page_loader"></div>
        <?php if ( !is_404() ) : ?>
            <header class="site-header">
                <div class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-8 col-sm-7">
                                <div class="list-inline">
                                    <a href="#"><i class="fa fa-phone"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4 col-sm-5">
                                <ul class="pull-right top-social-media">
                                    <?php wp_nav_menu( array(
                                        	'menu' => 'social',
                                        	'menu_class' => 'pull-right top-social-media',
                                        	'container' => '',
                                        	'theme_location' => 'social'
                                    ) ); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-header">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand logo" href="<?php echo esc_url( home_url() ); ?>"> <img src="<?php echo PG_Image::getUrl( get_theme_mod( 'pam_brand_logo', esc_url( get_template_directory_uri() . '/img/logos/logo-site.svg' ) ), 'large' ) ?>" alt="logo" class="style-svg"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <?php wp_nav_menu( array(
                                    	'menu' => 'primary',
                                    	'menu_class' => 'navbar-nav ml-auto',
                                    	'container' => '',
                                    	'depth' => '5',
                                    	'theme_location' => 'primary',
                                    	'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                    	'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
        <?php endif; ?>
        <main>