<?php get_header(); ?>

<div class="page_loader"></div>
<!-- Top header start -->
<header class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 col-sm-7">
                <div class="list-inline">
                    <a href="tel:1-8X0-666-8X88"><i class="fa fa-phone"></i><?php _e( 'Need Support? 1-8X0-666-8X88', 'pam' ); ?></a>
                    <a href="tel:info@themevessel.com"><i class="fa fa-envelope"></i><?php _e( 'info@themevessel.com', 'pam' ); ?></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i> </a>
                    </li>
                    <li>
                        <a href="#" class="rss"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->
<!-- Main header start -->
<header class="main-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo" href="index-2.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/logo.png" alt="logo"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Index', 'pam' ); ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li>
                                <a class="dropdown-item" href="index-2.html"><?php _e( 'Index 1', 'pam' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-3.html"><?php _e( 'Index 2', 'pam' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-4.html"><?php _e( 'Index 3', 'pam' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-5.html"><?php _e( 'Index 4', 'pam' ); ?></a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="index-6.html"><?php _e( 'Index 5 (Video)', 'pam' ); ?></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Properties', 'pam' ); ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'List Layout', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="properties-list-rightside.html"><?php _e( 'Right Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-list-leftsidebar.html"><?php _e( 'Left Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-list-fullwidth.html"><?php _e( 'Fullwidth', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Grid Layout', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="properties-grid-rightside.html"><?php _e( 'Right Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-grid-leftside.html"><?php _e( 'Left Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-grid-fullwidth.html"><?php _e( 'Fullwidth', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Map View', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="properties-map-rightside-list.html"><?php _e( 'Map List Right Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-map-leftside-list.html"><?php _e( 'Map List Left Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-map-rightside-grid.html"><?php _e( 'Map Grid Right Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-map-leftside-grid.html"><?php _e( 'Map Grid Left Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-map-full.html"><?php _e( 'Map FullWidth', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Property Detail', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="properties-details.html"><?php _e( 'Property Detail 1', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-details-2.html"><?php _e( 'Property Detail 2', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="properties-details-3.html"><?php _e( 'Property Detail 3', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown megamenu-li">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php _e( 'Pages', 'pam' ); ?></a>
                        <div class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                            <div class="megamenu-area">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title"><?php _e( 'Pages', 'pam' ); ?></h6>
                                            <a class="dropdown-item" href="about.html"><?php _e( 'About 1', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="about-2.html"><?php _e( 'About 2', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="properties-list-rightside.html"><?php _e( 'Properties List', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="properties-grid-rightside.html"><?php _e( 'Properties Grid', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="properties-comparison.html"><?php _e( 'Properties Comparison', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="search-brand.html"><?php _e( 'Properties Brands', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="services-1.html"><?php _e( 'Services 1', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="services-2.html"><?php _e( 'Services 2', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="coming-soon.html"><?php _e( 'Coming Soon', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="elements.html"><?php _e( 'Elements', 'pam' ); ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title"><?php _e( 'Pages', 'pam' ); ?></h6>
                                            <a class="dropdown-item" href="agent-list.html"><?php _e( 'Agent List 1', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="agent-list-2.html"><?php _e( 'Agent List 2', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="agent-grid.html"><?php _e( 'Agent Grid 1', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="agent-grid-2.html"><?php _e( 'Agent Grid 2', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="agent-detail.html"><?php _e( 'Agent Detail', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="pricing-tables.html"><?php _e( 'Pricing Tables 1', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="pricing-tables-2.html"><?php _e( 'Pricing Tables 2', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="pricing-tables-3.html"><?php _e( 'Pricing Tables 3', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="typography.html"><?php _e( 'Typography', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="typography-2.html"><?php _e( 'Typography 2', 'pam' ); ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title"><?php _e( 'Pages', 'pam' ); ?></h6>
                                            <a class="dropdown-item" href="contact.html"><?php _e( 'Contact 1', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="contact-2.html"><?php _e( 'Contact 2', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="contact-3.html"><?php _e( 'Contact 3', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="gallery-3column.html"><?php _e( 'Gallery 3 column', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="gallery-4column.html"><?php _e( 'Gallery 4 column', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="gallery-6column.html"><?php _e( 'Gallery 6 column', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="faq.html"><?php _e( 'Faq 1', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="faq-2.html"><?php _e( 'Faq 2', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="faq-3.html"><?php _e( 'Faq 3', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="icon.html"><?php _e( 'Icon', 'pam' ); ?></a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="megamenu-section">
                                            <h6 class="megamenu-title"><?php _e( 'Pages', 'pam' ); ?></h6>
                                            <a class="dropdown-item" href="my-profile.html"><?php _e( 'My profile', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="my-properties.html"><?php _e( 'My Properties', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="favorited-properties.html"><?php _e( 'Favorited Properties', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="submit-property.html"><?php _e( 'Submit Property', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="login.html"><?php _e( 'Login', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="forgot-password.html"><?php _e( 'Forgot Password', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="change-password.html"><?php _e( 'Change Password', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="signup.html"><?php _e( 'Register', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="404.html"><?php _e( 'Pages 404', 'pam' ); ?></a>
                                            <a class="dropdown-item" href="404-2.html"><?php _e( 'Pages 404 2', 'pam' ); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Blog', 'pam' ); ?> </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Classic', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog-classic-sidebar-right.html"><?php _e( 'Right Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-classic-sidebar-left.html"><?php _e( 'Left Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-classic-fullwidth.html"><?php _e( 'FullWidth', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Columns', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog-columns-2col.html"><?php _e( '2 Columns', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-columns-3col.html"><?php _e( '3 Columns', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Masonry', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog-masonry-2col.html"><?php _e( '2 Masonry', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-masonry-3col.html"><?php _e( '3 Masonry', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="#"><?php _e( 'Blog Details', 'pam' ); ?></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item" href="blog-single-sidebar-right.html"><?php _e( 'Right Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-single-sidebar-left.html"><?php _e( 'Left Sidebar', 'pam' ); ?></a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="blog-single-fullwidth.html"><?php _e( 'Fullwidth', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="submit-property.html" class="nav-link link-color"><i class="fa fa-plus"></i> <?php _e( 'Submit Property', 'pam' ); ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="#full-page-search" class="nav-link link-color"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1><?php _e( 'Properties Detail', 'pam' ); ?></h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumb-area">
                        <ul>
                            <li>
                                <a href="index-2.html"><?php _e( 'Index', 'pam' ); ?></a>
                            </li>
                            <li>
                                <span>/</span>
                                <?php _e( 'Properties Detail', 'pam' ); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i> 
                                <?php _e( '+1-8X0-666-8X88', 'pam' ); ?>
                            </li>
                            <li>
                                <a href="contact.html" class="btn btn-md button-theme"><?php _e( 'Contact us', 'pam' ); ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->
<!-- Properties details page start -->
<div class="properties-details-page content-area-7">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="properties-details-section">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                        <!-- Heading properties start -->
                        <div class="heading-properties-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <h3><?php _e( 'Relaxing Apartment', 'pam' ); ?></h3>
                                        <p><i class="fa fa-map-marker"></i> <?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?></p>
                                    </div>
                                    <div class="pull-right">
                                        <h3><span class="text-right"><?php _e( '$420,00/Night', 'pam' ); ?></span></h3>
                                        <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Heading properties end -->
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-1.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="1">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-3.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-4.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-5.jpg" class="img-fluid" alt="slider-properties">
                            </div>
                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <!-- Advanced search start -->
                    <div class="widget-2 advanced-search-2 d-lg-none d-xl-none">
                        <h3 class="sidebar-title"><?php _e( 'Advanced Search', 'pam' ); ?></h3>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-status">
                                    <option>
                                        <?php _e( 'All Status', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'For Sale', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'For Rent', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-type">
                                    <option>
                                        <?php _e( 'All Type', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Apartments', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Houses', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Commercial', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Garages', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="commercial">
                                    <option>
                                        <?php _e( 'Commercial', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Residential', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Land', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Hotels', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>
                                        <?php _e( 'location', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'New York', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Bangladesh', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'India', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Canada', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>
                                                <?php _e( 'Bedrooms', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>
                                                <?php _e( 'Bathroom', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>
                                                <?php _e( 'Balcony', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="garage">
                                            <option>
                                                <?php _e( 'Garage', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="range-slider">
                                <label>
                                    <?php _e( 'Area', 'pam' ); ?>
                                </label>
                                <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="range-slider">
                                <label>
                                    <?php _e( 'Price', 'pam' ); ?>
                                </label>
                                <div data-min="0" data-max="150000" data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button">
                                    <?php _e( 'Search', 'pam' ); ?>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Advanced search end -->
                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-40">
                        <ul class="nav nav-tabs" id="carTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false"><?php _e( 'Description', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false"><?php _e( 'Floor Plans', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true"><?php _e( 'Details', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true"><?php _e( 'Video', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true"><?php _e( 'Location', 'pam' ); ?></a>
                            </li>
                        </ul>
                        <div class="tab-content" id="carTabContent">
                            <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                <div class="properties-description mb-50">
                                    <h3 class="heading-2"> <?php _e( 'Description', 'pam' ); ?> </h3>
                                    <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.', 'pam' ); ?></p>
                                    <p><?php _e( 'Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus.', 'pam' ); ?> <?php _e( 'Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.', 'pam' ); ?></p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="two" role="tabpanel" aria-labelledby="two-tab">
                                <div class="floor-plans mb-50">
                                    <h3 class="heading-2"><?php _e( 'Floor Plans', 'pam' ); ?></h3>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><strong><?php _e( 'Size', 'pam' ); ?></strong></td>
                                                <td><strong><?php _e( 'Rooms', 'pam' ); ?></strong></td>
                                                <td><strong><?php _e( 'Bathrooms', 'pam' ); ?></strong></td>
                                                <td><strong><?php _e( 'Garage', 'pam' ); ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td><?php _e( '1600', 'pam' ); ?></td>
                                                <td><?php _e( '3', 'pam' ); ?></td>
                                                <td><?php _e( '2', 'pam' ); ?></td>
                                                <td><?php _e( '1', 'pam' ); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/floor-plans.png" alt="floor-plans" class="img-fluid">
                                </div>
                            </div>
                            <div class="tab-pane fade " id="three" role="tabpanel" aria-labelledby="three-tab">
                                <div class="property-details mb-40">
                                    <h3 class="heading-2"><?php _e( 'Property Details', 'pam' ); ?></h3>
                                    <div class="row">
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li>
                                                    <strong><?php _e( 'Property Id:', 'pam' ); ?></strong>
                                                    <?php _e( '215', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Price:', 'pam' ); ?></strong>
                                                    <?php _e( '$1240/ Month', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Property Type:', 'pam' ); ?></strong>
                                                    <?php _e( 'House', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Bathrooms:', 'pam' ); ?></strong>
                                                    <?php _e( '3', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Bathrooms:', 'pam' ); ?></strong>
                                                    <?php _e( '2', 'pam' ); ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li>
                                                    <strong><?php _e( 'Property Lot Size:', 'pam' ); ?></strong>
                                                    <?php _e( '800 ft2', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Land area:', 'pam' ); ?></strong>
                                                    <?php _e( '230 ft2', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Year Built:', 'pam' ); ?></strong>
                                                    <?php _e( '2018', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Available From:', 'pam' ); ?></strong>
                                                    <?php _e( '2018', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Garages:', 'pam' ); ?></strong>
                                                    <?php _e( '2', 'pam' ); ?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <ul>
                                                <li>
                                                    <strong><?php _e( 'Sold:', 'pam' ); ?></strong>
                                                    <?php _e( 'Yes', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'City:', 'pam' ); ?></strong>
                                                    <?php _e( 'Usa', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Parking:', 'pam' ); ?></strong>
                                                    <?php _e( 'Yes', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Property Owner:', 'pam' ); ?></strong>
                                                    <?php _e( 'Sohel Rana', 'pam' ); ?>
                                                </li>
                                                <li>
                                                    <strong><?php _e( 'Zip Code:', 'pam' ); ?> </strong>
                                                    <?php _e( '2451', 'pam' ); ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="4" role="tabpanel" aria-labelledby="4-tab">
                                <div class="inside-properties mb-50">
                                    <h3 class="heading-2"> <?php _e( 'Property Video', 'pam' ); ?> </h3>
                                    <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="5" role="tabpanel" aria-labelledby="5-tab">
                                <div class="location mb-50">
                                    <div class="map">
                                        <h3 class="heading-2"><?php _e( 'Property Location', 'pam' ); ?></h3>
                                        <div id="map" class="contact-map"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade " id="6" role="tabpanel" aria-labelledby="6-tab">
                                <div class="similar-properties mb-30">
                                    <h3 class="heading-2"><?php _e( 'Similar Properties', 'pam' ); ?></h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="property-box">
                                                <div class="property-thumbnail">
                                                    <a href="properties-details.html" class="property-img"> <div class="listing-badges">
                                                            <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span>
                                                        </div> <div class="price-ratings-box">
                                                            <p class="price"> <?php _e( '$178,000', 'pam' ); ?> </p>
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                        </div> <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                                                                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                                                                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="carousel-item active">
                                                                    <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" alt="properties">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" alt="properties">
                                                                </div>
                                                                <div class="carousel-item">
                                                                    <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-2.jpg" alt="properties">
                                                                </div>
                                                            </div>
                                                        </div> </a>
                                                </div>
                                                <div class="detail">
                                                    <h1 class="title"> <a href="properties-details.html"><?php _e( 'Modern Family Home', 'pam' ); ?></a> </h1>
                                                    <div class="location">
                                                        <a href="properties-details.html"> <i class="fa fa-map-marker"></i><?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?> </a>
                                                    </div>
                                                    <ul class="facilities-list clearfix">
                                                        <li>
                                                            <i class="flaticon-furniture"></i> 
                                                            <?php _e( '3 Bedrooms', 'pam' ); ?>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-holidays"></i> 
                                                            <?php _e( '2 Bathrooms', 'pam' ); ?>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-square"></i> 
                                                            <?php _e( 'Sq Ft:3400', 'pam' ); ?>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-vehicle"></i> 
                                                            <?php _e( '1 Garage', 'pam' ); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="footer clearfix">
                                                    <div class="pull-left days">
                                                        <p><i class="flaticon-time"></i> <?php _e( '5 Days ago', 'pam' ); ?></p>
                                                    </div>
                                                    <ul class="pull-right">
                                                        <li>
                                                            <a href="#"><i class="flaticon-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="flaticon-multimedia"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="property-box">
                                                <div class="property-thumbnail">
                                                    <a href="properties-details.html" class="property-img"> <div class="listing-badges">
                                                            <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span>
                                                        </div> <div class="price-ratings-box">
                                                            <p class="price"> <?php _e( '$178,000', 'pam' ); ?> </p>
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                        </div> <img class="d-block w-100" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-5.jpg" alt="properties"> </a>
                                                </div>
                                                <div class="detail">
                                                    <h1 class="title"> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h1>
                                                    <div class="location">
                                                        <a href="properties-details.html"> <i class="fa fa-map-marker"></i><?php _e( '123 Kathal St. Tampa City,', 'pam' ); ?> </a>
                                                    </div>
                                                    <ul class="facilities-list clearfix">
                                                        <li>
                                                            <i class="flaticon-furniture"></i> 
                                                            <?php _e( '3 Bedrooms', 'pam' ); ?>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-holidays"></i> 
                                                            <?php _e( '2 Bathrooms', 'pam' ); ?>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-square"></i> 
                                                            <?php _e( 'Sq Ft:3400', 'pam' ); ?>
                                                        </li>
                                                        <li>
                                                            <i class="flaticon-vehicle"></i> 
                                                            <?php _e( '1 Garage', 'pam' ); ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="footer clearfix">
                                                    <div class="pull-left days">
                                                        <p><i class="flaticon-time"></i> <?php _e( '5 Days ago', 'pam' ); ?></p>
                                                    </div>
                                                    <ul class="pull-right">
                                                        <li>
                                                            <a href="#"><i class="flaticon-favorite"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="flaticon-multimedia"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Properties condition start -->
                    <div class="properties-condition mb-40">
                        <h3 class="heading-2"> <?php _e( 'Condition', 'pam' ); ?> </h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-furniture"></i>
                                        <?php _e( '2 Bedroom', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>
                                        <?php _e( 'Bathroom', 'pam' ); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-square"></i>
                                        <?php _e( '4800 sq ft', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>
                                        <?php _e( 'TV Lounge', 'pam' ); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <?php _e( '1 Garage', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i>
                                        <?php _e( 'Balcony', 'pam' ); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties condition end -->
                    <!-- Properties amenities start -->
                    <div class="properties-amenities mb-40">
                        <h3 class="heading-2"> <?php _e( 'Features', 'pam' ); ?> </h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-technology"></i>
                                        <?php _e( 'Air conditioning', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i>
                                        <?php _e( 'Balcony', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-beach"></i>
                                        <?php _e( 'Pool', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays-1"></i>
                                        <?php _e( 'Room service', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-people-2"></i>
                                        <?php _e( 'Gym', 'pam' ); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-connection"></i>
                                        <?php _e( 'Wifi', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <?php _e( 'Parking', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i>
                                        <?php _e( 'Double Bed', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-comedy"></i>
                                        <?php _e( 'Home Theater', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-technology-3"></i>
                                        <?php _e( 'Electric', 'pam' ); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-technology-1"></i>
                                        <?php _e( 'Telephone', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-people-3"></i>
                                        <?php _e( 'Jacuzzi', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-clock"></i>
                                        <?php _e( 'Alarm', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>
                                        <?php _e( 'Garage', 'pam' ); ?>
                                    </li>
                                    <li>
                                        <i class="flaticon-lock"></i>
                                        <?php _e( 'Security', 'pam' ); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties amenities end -->
                    <!-- Comments start -->
                    <!-- Comments end -->
                    <!-- Contact 1 start -->
                    <!-- Contact 1 end -->
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-left">
                    <!-- Advanced search start -->
                    <div class="widget search-area advanced-search d-none d-xl-block d-lg-block">
                        <h3 class="sidebar-title"><?php _e( 'Advanced Search', 'pam' ); ?></h3>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-status">
                                    <option>
                                        <?php _e( 'All Status', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'For Sale', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'For Rent', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-type">
                                    <option>
                                        <?php _e( 'All Type', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Apartments', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Houses', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Commercial', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Garages', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="commercial">
                                    <option>
                                        <?php _e( 'Commercial', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Residential', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Land', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Hotels', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>
                                        <?php _e( 'location', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'New York', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Bangladesh', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'India', 'pam' ); ?>
                                    </option>
                                    <option>
                                        <?php _e( 'Canada', 'pam' ); ?>
                                    </option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>
                                                <?php _e( 'Bedrooms', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>
                                                <?php _e( 'Bathroom', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>
                                                <?php _e( 'Balcony', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="garage">
                                            <option>
                                                <?php _e( 'Garage', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '1', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '2', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '3', 'pam' ); ?>
                                            </option>
                                            <option>
                                                <?php _e( '4', 'pam' ); ?>
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="range-slider">
                                <label>
                                    <?php _e( 'Area', 'pam' ); ?>
                                </label>
                                <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="range-slider">
                                <label>
                                    <?php _e( 'Price', 'pam' ); ?>
                                </label>
                                <div data-min="0" data-max="150000" data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content"> <i class="fa fa-plus-circle"></i> <?php _e( 'Show More Options', 'pam' ); ?> </a>
                            <div id="options-content" class="collapse">
                                <label class="margin-t-10">
                                    <?php _e( 'Features', 'pam' ); ?>
                                </label>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        <?php _e( 'Free Parking', 'pam' ); ?>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        <?php _e( 'Air Condition', 'pam' ); ?>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        <?php _e( 'Places to seat', 'pam' ); ?>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        <?php _e( 'Swimming Pool', 'pam' ); ?>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox5" type="checkbox">
                                    <label for="checkbox5">
                                        <?php _e( 'Laundry Room', 'pam' ); ?>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">
                                        <?php _e( 'Window Covering', 'pam' ); ?>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        <?php _e( 'Central Heating', 'pam' ); ?>
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        <?php _e( 'Alarm', 'pam' ); ?>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button">
                                    <?php _e( 'Search', 'pam' ); ?>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Posts by category start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title"><?php _e( 'Category', 'pam' ); ?></h3>
                        <ul class="list-unstyled list-cat">
                            <li>
                                <a href="#"><?php _e( 'Single Family', 'pam' ); ?> <span><?php _e( '(45)', 'pam' ); ?></span></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Apartment', 'pam' ); ?> <span><?php _e( '(21)', 'pam' ); ?></span> </a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Condo', 'pam' ); ?> <span><?php _e( '(23)', 'pam' ); ?></span></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Multi Family', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a>
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Villa', 'pam' ); ?> <span><?php _e( '(19)', 'pam' ); ?></span></a> 
                            </li>
                            <li>
                                <a href="#"><?php _e( 'Other', 'pam' ); ?> <span><?php _e( '(22)', 'pam' ); ?> </span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Social media box start -->
                    <div class="social-media-box widget clearfix">
                        <h3 class="sidebar-title"><?php _e( 'Social Media', 'pam' ); ?></h3>
                        <ul class="social-list">
                            <li>
                                <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> </a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg"> <i class="fa fa-twitter"></i> </a>
                            </li>
                            <li>
                                <a href="#" class="google-bg"> <i class="fa fa-google"></i> </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin-bg"> <i class="fa fa-linkedin"></i> </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest-bg"> <i class="fa fa-pinterest"></i> </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Team 5 start -->
                    <div class="team-5 widget">
                        <h3 class="sidebar-title"><?php _e( 'Contact Agent', 'pam' ); ?></h3>
                        <div class="media">
                            <a href="agent-detail.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-1.jpg" alt="avatar"> </a>
                            <div class="media-body align-self-center">
                                <h5> <a href="properties-details.html"><?php _e( 'John Antony', 'pam' ); ?></a> </h5>
                                <p><i class="flaticon-technology-1"></i><a href="agent-detail.html"><?php _e( '1-8X0-666-8X88', 'pam' ); ?></a></p>
                                <p><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a></p>
                            </div>
                        </div>
                        <div class="media mb-0">
                            <a href="agent-detail.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/avatar/avatar-2.jpg" alt="avatar"> </a>
                            <div class="media-body align-self-center">
                                <h5> <a href="properties-details.html"><?php _e( 'Karen Paran', 'pam' ); ?></a> </h5>
                                <p><i class="flaticon-technology-1"></i><a href="agent-detail.html"><?php _e( '1-8X0-666-8X88', 'pam' ); ?></a></p>
                                <p><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com"><?php _e( 'info@themevessel.com', 'pam' ); ?></a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Financing calculator start -->
                    <div class="contact-1 financing-calculator widget">
                        <h5 class="sidebar-title"><?php _e( 'Mortgage Calculator', 'pam' ); ?></h5>
                        <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" method="GET" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label">
                                    <?php _e( 'Property Price', 'pam' ); ?>
                                </label>
                                <input type="text" class="form-control" placeholder="$24.400">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <?php _e( 'Interest Rate (%)', 'pam' ); ?>
                                </label>
                                <input type="text" class="form-control" placeholder="12%">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <?php _e( 'Period In Months', 'pam' ); ?>
                                </label>
                                <input type="text" class="form-control" placeholder="6 Months">
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    <?php _e( 'Down PaymenT', 'pam' ); ?>
                                </label>
                                <input type="text" class="form-control" placeholder="$32,300">
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn button-theme btn-md btn-block">
                                    <?php _e( 'Cauculate', 'pam' ); ?>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
<!-- Footer start -->
<footer class="footer">
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
                            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="rss"><i class="fa fa-rss"></i></a>
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
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'Home', 'pam' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'About Us', 'pam' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'Services', 'pam' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'properties Details', 'pam' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'My Account', 'pam' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'Privacy Policy', 'pam' ); ?></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-angle-right"></i><?php _e( 'properties Details', 'pam' ); ?></a>
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
                        <form action="<?php echo esc_url( get_template_directory_uri() ); ?>/#" method="GET">
                            <p> <input type="text" class="form-contact" name="email" placeholder="Enter Address"> </p>
                            <p> <button type="submit" name="submitNewsletter" class="btn btn-block button-theme">
                                    <?php _e( 'Subscribe', 'pam' ); ?>
                                </button> </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <p class="copy"><?php _e( '© 2017', 'pam' ); ?> <a href="#"><?php _e( 'Theme Vessel.', 'pam' ); ?></a> <?php _e( 'Trademarks and brands are the property of their respective owners.', 'pam' ); ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->
<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://theme-vessel-templates.theme-vessel.ey.r.appspot.com/real-house/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here"/>
        <button type="submit" class="btn btn-sm button-theme">
            <?php _e( 'Search', 'pam' ); ?>
        </button>
    </form>
</div>        

<?php get_footer(); ?>