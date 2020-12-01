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
          <a class="navbar-brand logo" href="index-2.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/logo-site.svg" alt="logo"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php _e( 'Index', 'pam' ); ?> </a>
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php _e( 'Properties', 'pam' ); ?> </a>
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
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php _e( 'Blog', 'pam' ); ?> </a>
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
    <div>
      <div class="search-banner">
        <div class="container">
          <h3 class="search-title"><?php _e( 'Find Your Dream House', 'pam' ); ?></h3>
          <form method="GET">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="area">
                    <option><?php _e( 'Area', 'pam' ); ?></option>
                    <option><?php _e( '2000', 'pam' ); ?></option>
                    <option><?php _e( '1600', 'pam' ); ?></option>
                    <option><?php _e( '1200', 'pam' ); ?></option>
                    <option><?php _e( '800', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="property-status">
                    <option><?php _e( 'Property Status', 'pam' ); ?></option>
                    <option><?php _e( 'For Sale', 'pam' ); ?></option>
                    <option><?php _e( 'For Rent', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="property-types">
                    <option><?php _e( 'Property Types', 'pam' ); ?></option>
                    <option><?php _e( 'Apartments', 'pam' ); ?></option>
                    <option><?php _e( 'Houses', 'pam' ); ?></option>
                    <option><?php _e( 'Commercial', 'pam' ); ?></option>
                    <option><?php _e( 'Garages', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="location">
                    <option><?php _e( 'Location', 'pam' ); ?></option>
                    <option><?php _e( 'United States', 'pam' ); ?></option>
                    <option><?php _e( 'United Kingdom', 'pam' ); ?></option>
                    <option><?php _e( 'American Samoa', 'pam' ); ?></option>
                    <option><?php _e( 'Belgium', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="max-area">
                    <option><?php _e( 'Max Area (Sq Ff)', 'pam' ); ?></option>
                    <option><?php _e( '2800', 'pam' ); ?></option>
                    <option><?php _e( '3200', 'pam' ); ?></option>
                    <option><?php _e( '3600', 'pam' ); ?></option>
                    <option><?php _e( '4000', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="form-group">
                  <select class="selectpicker search-fields" name="max-area">
                    <option><?php _e( 'Min Area (Sq Ff)', 'pam' ); ?></option>
                    <option><?php _e( '2800', 'pam' ); ?></option>
                    <option><?php _e( '3200', 'pam' ); ?></option>
                    <option><?php _e( '3600', 'pam' ); ?></option>
                    <option><?php _e( '4000', 'pam' ); ?></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="range-slider">
                  <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <div class="form-group">
                  <button class="search-button"><?php _e( 'Search', 'pam' ); ?></button>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <a class="show-more-options" data-toggle="collapse" data-target="#options-content"> <i class="fa fa-plus-circle"></i> <?php _e( 'Show More Options', 'pam' ); ?> </a>
            <div id="options-content" class="collapse">
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="bedrooms">
                      <option><?php _e( 'Bedrooms', 'pam' ); ?></option>
                      <option><?php _e( '1', 'pam' ); ?></option>
                      <option><?php _e( '2', 'pam' ); ?></option>
                      <option><?php _e( '3', 'pam' ); ?></option>
                      <option><?php _e( '4', 'pam' ); ?></option>
                      <option><?php _e( '5', 'pam' ); ?></option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="batrooms">
                      <option><?php _e( 'Bathroom', 'pam' ); ?></option>
                      <option><?php _e( '1', 'pam' ); ?></option>
                      <option><?php _e( '2', 'pam' ); ?></option>
                      <option><?php _e( '3', 'pam' ); ?></option>
                      <option><?php _e( '4', 'pam' ); ?></option>
                      <option><?php _e( '5', 'pam' ); ?></option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="Balcony">
                      <option><?php _e( 'Balcony', 'pam' ); ?></option>
                      <option><?php _e( '1', 'pam' ); ?></option>
                      <option><?php _e( '2', 'pam' ); ?></option>
                      <option><?php _e( '3', 'pam' ); ?></option>
                      <option><?php _e( '4', 'pam' ); ?></option>
                      <option><?php _e( '5', 'pam' ); ?></option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                  <div class="form-group">
                    <select class="selectpicker search-fields" name="garage">
                      <option><?php _e( 'Garage', 'pam' ); ?></option>
                      <option><?php _e( '1', 'pam' ); ?></option>
                      <option><?php _e( '2', 'pam' ); ?></option>
                      <option><?php _e( '3', 'pam' ); ?></option>
                      <option><?php _e( '4', 'pam' ); ?></option>
                      <option><?php _e( '5', 'pam' ); ?></option>
                    </select>
                  </div>
                </div>
              </div>
              <label class="margin-t-10"><?php _e( 'Features', 'pam' ); ?></label>
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="properties-section-body content-area">
        <div class="container">
          <div class="row">
            <div class="offset-lg-1 col-lg-10">
              <!-- Option bar start -->
              <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                <div class="row">
                  <div class="col-lg-6 col-md-5 col-sm-5 col-xs-2">
                    <div class="sorting-options">
                      <span><?php _e( 'View as:', 'pam' ); ?></span>
                      <a href="properties-list-fullwidth.html" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                      <a href="properties-grid-fullwidth.html" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                    <div class="sorting-options2">
                      <span><?php _e( 'Order by:', 'pam' ); ?></span>
                      <select class="sorting">
                        <option><?php _e( 'Price High to Low', 'pam' ); ?></option>
                        <option><?php _e( 'Price: Low to High', 'pam' ); ?></option>
                        <option><?php _e( 'Newest Properties', 'pam' ); ?></option>
                        <option><?php _e( 'Oldest Properties', 'pam' ); ?></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Option bar end -->
              <!-- Property box 2 start -->
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-1.jpg" alt="properties" class="img-fluid" width="600" height="400"> <div class="listing-badges">
                        <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span>
                      </div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Park avenue', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-2.jpg" alt="properties" class="img-fluid"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-3.jpg" alt="properties" class="img-fluid"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Modern Family Home', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-4.jpg" alt="properties" class="img-fluid"> <div class="listing-badges">
                        <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span>
                      </div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Park avenue', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-5.jpg" alt="properties" class="img-fluid"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-1.jpg" alt="properties" class="img-fluid"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Modern Family Home', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-2.jpg" alt="properties" class="img-fluid"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-3.jpg" alt="properties" class="img-fluid"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Modern Family Home', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-4.jpg" alt="properties" class="img-fluid"> <div class="listing-badges">
                        <span class="featured"><?php _e( 'Featured', 'pam' ); ?></span>
                      </div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Park avenue', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <div class="property-box-2 wow fadeInUp delay-03s">
                <div class="row">
                  <div class="col-lg-4 col-md-5 col-pad">
                    <a href="properties-details.html" class="property-img"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/properties/properties-list-5.jpg" alt="properties" class="img-fluid"> <div class="listing-time opening"><?php _e( 'For Sale', 'pam' ); ?></div> <div class="price-ratings-box">
                        <p class="price">
                                        <?php _e( '$178,000', 'pam' ); ?> </p>
                        <div class="ratings">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                        </div>
                      </div> </a>
                  </div>
                  <div class="col-lg-8 col-md-7">
                    <div class="detail ">
                      <h3 class="title"> <a href="properties-details.html"><?php _e( 'Relaxing Apartment', 'pam' ); ?></a> </h3>
                      <h5 class="location"> <a href="properties-details.html"> <i class="flaticon-location"></i><?php _e( '20-21 Kathal St. Tampa City, FL', 'pam' ); ?> </a> </h5>
                      <ul class="facilities-list clearfix">
                        <li>
                          <i class="flaticon-furniture"></i>
                          <span><?php _e( '3 Beds', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-holidays"></i>
                          <span><?php _e( '1 Baths', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-square"></i>
                          <span><?php _e( '4800 sq ft', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-vehicle"></i>
                          <span><?php _e( '1 Garage', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-monitor"></i>
                          <span><?php _e( '1 TV', 'pam' ); ?></span>
                        </li>
                        <li>
                          <i class="flaticon-window"></i>
                          <span><?php _e( '3 Balcony', 'pam' ); ?></span>
                        </li>
                      </ul>
                    </div>
                    <a href="properties-details.html" class="btn button-theme"><?php _e( 'Details', 'pam' ); ?></a>
                    <div class="footer">
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
              <!-- properties end -->
              <!-- Page navigation start -->
              <div class="pagination-box hidden-mb-45 text-center">
                <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link active" href="#"><?php _e( '1', 'pam' ); ?></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#"><?php _e( '2', 'pam' ); ?></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#"><?php _e( '3', 'pam' ); ?></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- Page navigation end-->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main header end -->
    <!-- Search banner start -->
    <!-- Search banner end -->
    <!-- Properties section body start -->
    <!-- Properties section body end -->
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
              <h4>
                        <?php _e( 'Useful Links', 'pam' ); ?> </h4>
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
              <h4>
                        <?php _e( 'Gallery', 'pam' ); ?> </h4>
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
        <button type="submit" class="btn btn-sm button-theme"><?php _e( 'Search', 'pam' ); ?></button>
      </form>
    </div>

<?php get_footer(); ?>