<?php
/*
 The template for displaying: Main File
 */
?>
<?php get_header(); ?>

<div id="primary">
    <main id="site-main">
        <div class="banner" id="banner">
            <?php
                $sliders_query_args = array(
                	'post_type' => 'sliders',
                	'post_status' => 'publish',
                	'nopaging' => true,
                	'posts_per_page' => 3,
                	'order' => 'ASC',
                	'orderby' => 'rand',
                	'cache_results' => false
                )
            ?>
            <?php $sliders_query = new WP_Query( $sliders_query_args ); ?>
            <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
                <?php if ( $sliders_query->have_posts() ) : ?>
                    <div class="carousel-inner">
                        <?php $sliders_query_item_number = 0; ?>
                        <?php while ( $sliders_query->have_posts() ) : $sliders_query->the_post(); ?>
                            <div class="carousel-item banner-max-height<?php if( $sliders_query_item_number == 0) echo ' active'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>">
                                <?php echo PG_Image::getPostImage( null, 'large', array(
                                    	'class' => 'd-block w-100',
                                    	'alt' => __( 'Banner', 'pam' )
                                ), null, null ) ?>
                                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                                    <div class="carousel-content container">
                                        <div class="text-center">
                                            <h3 class="text-uppercase" data-animation="animated fadeInDown delay-05s"><?php the_title(); ?></h3>
                                            <p data-animation="animated fadeInUp delay-10s"><?php the_content(); ?></p>
                                            <?php if ( get_field( 'url_da_pagina' ) ) : ?>
                                                <a class="btn btn-white" href="<?php echo get_field( 'url_da_pagina' ); ?>" rel="nofollow noreferrer noopener"><?php _e( 'Saiba Mais', 'pam' ); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $sliders_query_item_number++; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
                <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev"> <span class="slider-mover-left" aria-hidden="true"> <i class="fa fa-angle-left"></i> </span> </a>
                <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next"> <span class="slider-mover-right" aria-hidden="true"> <i class="fa fa-angle-right"></i> </span> </a>
            </div>
            <!-- Search Section start -->
            <div class="search-section search-area-3 d-none d-xl-block d-lg-block" id="search-area-3">
                <div class="container">
                    <div class="search-section-area ssa">
                        <div class="search-area-inner">
                            <div class="search-contents">
                                <form method="GET">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="area">
                                                    <option>
                                                        <?php _e( 'Area', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '3000', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '2600', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '2200', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '1800', 'pam' ); ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="property-status">
                                                    <option>
                                                        <?php _e( 'Property Status', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( 'For Sale', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( 'For Rent', 'pam' ); ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="property-types">
                                                    <option>
                                                        <?php _e( 'Property Types', 'pam' ); ?>
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
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="location">
                                                    <option>
                                                        <?php _e( 'Location', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( 'United States', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( 'United Kingdom', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( 'American Samoa', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( 'Belgium', 'pam' ); ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="max-area">
                                                    <option>
                                                        <?php _e( 'Max Area (Sq Ff)', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '2400', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '2800', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '3200', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '3600', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '4000', 'pam' ); ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields" name="min-area">
                                                    <option>
                                                        <?php _e( 'Min Area (Sq Ff)', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '2400', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '2800', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '3200', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '3600', 'pam' ); ?>
                                                    </option>
                                                    <option>
                                                        <?php _e( '4000', 'pam' ); ?>
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="range-slider">
                                                <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                            <div class="form-group">
                                                <button class="search-button">
                                                    <?php _e( 'Search', 'pam' ); ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search Section end -->
        </div>
        <div class="search-section search-area-2 bg-grea d-lg-none d-xl-none">
            <div class="container">
                <div class="search-section-area">
                    <div class="search-area-inner">
                        <div class="search-contents">
                            <form method="GET">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="area">
                                                <option>
                                                    <?php _e( 'Area', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '3000', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '2600', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '2200', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '1800', 'pam' ); ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="property-status">
                                                <option>
                                                    <?php _e( 'Property Status', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( 'For Sale', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( 'For Rent', 'pam' ); ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="property-types">
                                                <option>
                                                    <?php _e( 'Property Types', 'pam' ); ?>
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
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="location">
                                                <option>
                                                    <?php _e( 'Location', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( 'United States', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( 'United Kingdom', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( 'American Samoa', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( 'Belgium', 'pam' ); ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="max-area">
                                                <option>
                                                    <?php _e( 'Max Area (Sq Ff)', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '2400', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '2800', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '3200', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '3600', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '4000', 'pam' ); ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="min-area">
                                                <option>
                                                    <?php _e( 'Min Area (Sq Ff)', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '2400', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '2800', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '3200', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '3600', 'pam' ); ?>
                                                </option>
                                                <option>
                                                    <?php _e( '4000', 'pam' ); ?>
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="range-slider">
                                            <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                        <div class="form-group">
                                            <button class="search-button">
                                                <?php _e( 'Search', 'pam' ); ?>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( get_theme_mod( 'display_pam_sc_features' ) ) : ?>
            <div class="featured-properties content-area-9">
                <div class="container">
                    <!-- Main title -->
                    <?php if ( get_theme_mod( 'display_pam_sc_properties_load_page' ) ) : ?>
                        <?php
                            $display_pam_sc_properties_load_page_query_args = array(
                            	'page_id' => get_theme_mod('display_pam_sc_properties_load_page'),
                            	'posts_per_page' => 1
                            )
                        ?>
                        <?php $display_pam_sc_properties_load_page_query = new WP_Query( $display_pam_sc_properties_load_page_query_args ); ?>
                        <?php if ( $display_pam_sc_properties_load_page_query->have_posts() ) : ?>
                            <?php while ( $display_pam_sc_properties_load_page_query->have_posts() ) : $display_pam_sc_properties_load_page_query->the_post(); ?>
                                <div class="main-title">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_excerpt( ); ?>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php
                        $properties_query_args = array(
                        	'post_type' => 'properties',
                        	'posts_per_page' => 5,
                        	'order' => 'ASC',
                        	'orderby' => 'date'
                        )
                    ?>
                    <?php $properties_query = new WP_Query( $properties_query_args ); ?>
                    <?php if ( $properties_query->have_posts() ) : ?>
                        <div class="slick-slider-area">
                            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                                <?php while ( $properties_query->have_posts() ) : $properties_query->the_post(); ?>
                                    <?php PG_Helper::rememberShownPost(); ?>
                                    <div <?php post_class( 'slick-slide-item' ); ?> id="post-<?php the_ID(); ?>">
                                        <div class="property-box">
                                            <div class="property-thumbnail">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>" class="property-img"> <div class="listing-badges">
                                                        <?php $terms = get_the_terms( get_the_ID(), 'properties_status' ) ?>
                                                        <?php if( !empty( $terms ) ) : ?>
                                                            <?php $term_i = 0; ?>
                                                            <?php foreach( $terms as $term ) : ?>
                                                                <?php if( $term_i == 0 ) : ?>
                                                                    <span class="featured"><?php echo $term->name; ?></span>
                                                                <?php endif; ?>
                                                                <?php $term_i++; ?>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </div> <div class="price-ratings-box">
                                                        <p class="price"><?php echo get_field( 'preco' ); ?></p>
                                                    </div> <?php echo get_field( 'slides_do_imovel' ); ?> </a>
                                            </div>
                                            <div class="detail">
                                                <h1 class="title"> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h1>
                                                <?php if ( get_field( 'endereco' ) ) : ?>
                                                    <div class="location">
                                                        <a href="<?php echo esc_url( get_permalink() ); ?>"> <i class="fa fa-map-marker"></i><?php echo get_field( 'endereco' ); ?></a>
                                                    </div>
                                                <?php endif; ?>
                                                <ul class="facilities-list clearfix">
                                                    <li>
                                                        <i class="flaticon-furniture"></i>
                                                        <?php echo get_post_meta( get_the_ID(), 'informacoes_planta_quartos', true ); ?>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-holidays"></i>
                                                        <?php echo get_field( 'informacoes_planta_banheiros' ); ?>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-square"></i>
                                                        <?php echo get_field( 'informacoes_planta_area' ); ?>
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-vehicle"></i>
                                                        <?php echo get_field( 'informacoes_planta_garagem' ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="footer clearfix">
                                                <div class="pull-left days">
                                                    <p><?php the_modified_date( 'd/M/Y', '<i class="flaticon-time"></i>' ); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            </div>
                            <div class="slick-prev slick-arrow-buton">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="slick-next slick-arrow-buton">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( get_theme_mod( 'display_pam_sc_services' ) ) : ?>
            <div class="services-2 content-area-5 bg-grea-3">
                <div class="container">
                    <!-- Main title -->
                    <?php if ( get_theme_mod( 'display_pam_sc_service_load_page' ) ) : ?>
                        <?php
                            $display_pam_sc_service_load_page_query_args = array(
                            	'page_id' => get_theme_mod('display_pam_sc_service_load_page'),
                            	'posts_per_page' => 1
                            )
                        ?>
                        <?php $display_pam_sc_service_load_page_query = new WP_Query( $display_pam_sc_service_load_page_query_args ); ?>
                        <?php if ( $display_pam_sc_service_load_page_query->have_posts() ) : ?>
                            <?php while ( $display_pam_sc_service_load_page_query->have_posts() ) : $display_pam_sc_service_load_page_query->the_post(); ?>
                                <div class="main-title">
                                    <h1><?php the_title(); ?></h1>
                                    <?php if ( has_excerpt() ) : ?>
                                        <?php the_excerpt( ); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php
                        $servicos_query_args = array(
                        	'post_type' => 'servicos',
                        	'posts_per_page' => 4,
                        	'paged' => get_query_var( 'paged' ) ?: 1,
                        	'order' => 'ASC',
                        	'orderby' => 'rand'
                        )
                    ?>
                    <?php $servicos_query = new WP_Query( $servicos_query_args ); ?>
                    <?php if ( $servicos_query->have_posts() ) : ?>
                        <div class="row wow">
                            <?php while ( $servicos_query->have_posts() ) : $servicos_query->the_post(); ?>
                                <?php PG_Helper::rememberShownPost(); ?>
                                <div <?php post_class( 'col-lg-3 col-md-6 col-sm-6 col-xs-12 wow fadeInLeft delay-04s' ); ?> id="post-<?php the_ID(); ?>">
                                    <div class="service-info-5">
                                        <i class="<?php echo get_field( 'icon_services' ); ?>"></i>
                                        <h4><?php the_title(); ?></h4>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php else : ?>
                        <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( get_theme_mod( 'display_pam_sc_categories' ) ) : ?>
            <?php
                $display_pam_sc_categories_load_page_query_args = array(
                	'page_id' => get_theme_mod('display_pam_sc_categories_load_page'),
                	'posts_per_page' => 1
                )
            ?>
            <?php $display_pam_sc_categories_load_page_query = new WP_Query( $display_pam_sc_categories_load_page_query_args ); ?>
            <?php if ( $display_pam_sc_categories_load_page_query->have_posts() ) : ?>
                <?php while ( $display_pam_sc_categories_load_page_query->have_posts() ) : $display_pam_sc_categories_load_page_query->the_post(); ?>
                    <div class="categories content-area-8">
                        <div class="container">
                            <!-- Main title -->
                            <div class="main-title">
                                <h1><?php the_title(); ?></h1>
                                <?php the_excerpt( ); ?>
                            </div>
                            <div class="row wow">
                                <div class="col-lg-7 col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 wow fadeInLeft delay-04s col-pad">
                                            <div class="category">
                                                <div class="category_bg_box cat-1-bg">
                                                    <div class="category-overlay">
                                                        <div class="category-content">
                                                            <h3 class="category-title"> <a href="#"><?php _e( 'Apartment', 'pam' ); ?></a> </h3>
                                                            <a href="properties-list-rightside.html" class="category-subtitle"><?php _e( '14 Properties', 'pam' ); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 wow fadeInLeft delay-04s col-pad">
                                            <div class="category">
                                                <div class="category_bg_box cat-2-bg">
                                                    <div class="category-overlay">
                                                        <div class="category-content">
                                                            <h3 class="category-title"> <a href="#"><?php _e( 'House', 'pam' ); ?></a> </h3>
                                                            <a href="properties-list-rightside.html" class="category-subtitle"><?php _e( '98 Properties', 'pam' ); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 wow fadeInUp delay-04s col-pad">
                                            <div class="category">
                                                <div class="category_bg_box cat-3-bg">
                                                    <div class="category-overlay">
                                                        <div class="category-content">
                                                            <h3 class="category-title"> <a href="#"><?php _e( 'Villa', 'pam' ); ?></a> </h3>
                                                            <a href="properties-list-rightside.html" class="category-subtitle"><?php _e( '98 Properties', 'pam' ); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12 col-sm-12 wow fadeInRight delay-04s col-pad d-none d-xl-block d-lg-block">
                                    <div class="category">
                                        <div class="category_bg_box category_long_bg cat-4-bg">
                                            <div class="category-overlay">
                                                <div class="category-content">
                                                    <h3 class="category-title"> <a href="#"><?php _e( 'Farm', 'pam' ); ?></a> </h3>
                                                    <a href="properties-list-rightside.html" class="category-subtitle"><?php _e( '12 Properties', 'pam' ); ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        <?php endif; ?>
        <?php if ( get_theme_mod( 'display_pam_sc_team' ) ) : ?>
            <div class="our-team-2 content-area">
                <div class="container">
                    <!-- Main title -->
                    <?php if ( get_theme_mod( 'display_pam_sc_team_load_page' ) ) : ?>
                        <?php
                            $display_pam_sc_team_load_page_query_args = array(
                            	'page_id' => get_theme_mod('display_pam_sc_team_load_page'),
                            	'posts_per_page' => 1
                            )
                        ?>
                        <?php $display_pam_sc_team_load_page_query = new WP_Query( $display_pam_sc_team_load_page_query_args ); ?>
                        <?php if ( $display_pam_sc_team_load_page_query->have_posts() ) : ?>
                            <?php while ( $display_pam_sc_team_load_page_query->have_posts() ) : $display_pam_sc_team_load_page_query->the_post(); ?>
                                <div class="main-title">
                                    <h1><?php the_title(); ?></h1>
                                    <?php if ( has_excerpt() ) : ?>
                                        <?php the_excerpt( ); ?>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="row">
                        <?php
                            $corretor_query_args = array(
                            	'post_type' => 'corretor',
                            	'posts_per_page' => 4,
                            	'order' => 'ASC',
                            	'orderby' => 'date'
                            )
                        ?>
                        <?php $corretor_query = new WP_Query( $corretor_query_args ); ?>
                        <?php if ( $corretor_query->have_posts() ) : ?>
                            <?php while ( $corretor_query->have_posts() ) : $corretor_query->the_post(); ?>
                                <?php PG_Helper::rememberShownPost(); ?>
                                <div <?php post_class( 'col-lg-3 col-md-6 col-sm-6 wow fadeInLeft delay-04s' ); ?> id="post-<?php the_ID(); ?>">
                                    <div class="team-1">
                                        <div class="team-photo">
                                            <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo PG_Image::getPostImage( null, 'corretor', array(
                                                    	'class' => 'img-fluid'
                                                ), null, null ) ?> </a>
                                        </div>
                                        <div class="team-details">
                                            <h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h5>
                                            <h6><?php echo get_field( 'creci_numero' ); ?></h6>
                                            <ul class="social-list clearfix">
                                                <li>
                                                    <?php if ( get_field( 'facebook' ) ) : ?>
                                                        <a class="facebook" href="<?php echo get_field( 'facebook' ); ?>"><i class="fa fa-facebook"></i></a>
                                                    <?php endif; ?>
                                                </li>
                                                <li>
                                                    <?php if ( get_field( 'twitter' ) ) : ?>
                                                        <a href="<?php echo get_field( 'twitter' ); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                                    <?php endif; ?>
                                                </li>
                                                <li>
                                                    <?php if ( get_field( 'instagram' ) ) : ?>
                                                        <a href="<?php echo get_field( 'instagram' ); ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                                                    <?php endif; ?>
                                                </li>
                                                <li>
                                                    <?php if ( get_field( 'linkedin' ) ) : ?>
                                                        <a href="<?php echo get_field( 'linkedin' ); ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
                                                    <?php endif; ?>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( get_theme_mod( 'display_pam_sc_testemonials' ) ) : ?>
            <div class="testimonial-3">
                <div class="container">
                    <?php if ( get_theme_mod( 'display_pam_sc_testemonials_load_page' ) ) : ?>
                        <?php
                            $display_pam_sc_testemonials_load_page_query_args = array(
                            	'page_id' => get_theme_mod('display_pam_sc_testemonials_load_page'),
                            	'posts_per_page' => 1
                            )
                        ?>
                        <?php $display_pam_sc_testemonials_load_page_query = new WP_Query( $display_pam_sc_testemonials_load_page_query_args ); ?>
                        <?php if ( $display_pam_sc_testemonials_load_page_query->have_posts() ) : ?>
                            <?php while ( $display_pam_sc_testemonials_load_page_query->have_posts() ) : $display_pam_sc_testemonials_load_page_query->the_post(); ?>
                                <div class="main-title">
                                    <h1><?php the_title(); ?></h1>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="slick-slider-area">
                        <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                            <?php
                                $testemonials_query_args = array(
                                	'post_type' => 'testemonials',
                                	'posts_per_page' => 2,
                                	'paged' => get_query_var( 'paged' ) ?: 1,
                                	'order' => 'ASC',
                                	'orderby' => 'date'
                                )
                            ?>
                            <?php $testemonials_query = new WP_Query( $testemonials_query_args ); ?>
                            <?php if ( $testemonials_query->have_posts() ) : ?>
                                <?php while ( $testemonials_query->have_posts() ) : $testemonials_query->the_post(); ?>
                                    <?php PG_Helper::rememberShownPost(); ?>
                                    <div <?php post_class( 'slick-slide-item' ); ?> id="post-<?php the_ID(); ?>">
                                        <div class="testimonial-inner">
                                            <div class="content-box">
                                                <?php the_content(); ?>
                                            </div>
                                            <div class="media">
                                                <a href="#"> <?php echo PG_Image::getPostImage( null, 'large', array(
                                                        	'class' => 'img-fluid'
                                                    ), 'both', null ) ?> </a>
                                                <div class="media-body align-self-center">
                                                    <h5><?php the_title(); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( get_theme_mod( 'display_pam_sc_blog' ) ) : ?>
            <div class="blog content-area">
                <div class="container">
                    <!-- Main title -->
                    <?php if ( get_theme_mod( 'display_pam_sc_blog_load_page' ) ) : ?>
                        <?php
                            $display_pam_sc_blog_load_page_query_args = array(
                            	'page_id' => get_theme_mod('display_pam_sc_blog_load_page'),
                            	'posts_per_page' => 1
                            )
                        ?>
                        <?php $display_pam_sc_blog_load_page_query = new WP_Query( $display_pam_sc_blog_load_page_query_args ); ?>
                        <?php if ( $display_pam_sc_blog_load_page_query->have_posts() ) : ?>
                            <?php while ( $display_pam_sc_blog_load_page_query->have_posts() ) : $display_pam_sc_blog_load_page_query->the_post(); ?>
                                <div class="main-title">
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php
                        $post_query_args = array(
                        	'post_type' => 'post',
                        	'post_status' => 'publish',
                        	'posts_per_page' => 3,
                        	'order' => 'DESC',
                        	'orderby' => 'date'
                        )
                    ?>
                    <?php $post_query = new WP_Query( $post_query_args ); ?>
                    <?php if ( $post_query->have_posts() ) : ?>
                        <div class="row wow fadeInUp delay-04s">
                            <?php $post_query_item_number = 0; ?>
                            <?php while ( $post_query->have_posts() && $post_query_item_number++ < 3 ) : $post_query->the_post(); ?>
                                <div <?php post_class( 'col-lg-4 col-md-6' ); ?> id="post-<?php the_ID(); ?>">
                                    <div class="blog-1">
                                        <div class="blog-photo">
                                            <?php echo PG_Image::getPostImage( null, 'large', array(
                                                	'class' => 'img-fluid'
                                            ), null, null ) ?>
                                            <div class="profile-user">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <div class="post-meta clearfix">
                                                <ul>
                                                    <li>
                                                        <strong><a href="<?php echo get_the_author_meta( 'user_url', false ) ?>"><?php echo get_the_author_meta( 'user_firstname', false ) ?></a></strong>
                                                    </li>
                                                    <li class="mr-0">
                                                        <span><?php echo get_the_time( 'd/m/y' ) ?></span>
                                                    </li>
                                                    <li class="float-right">
                                                        <i class="fa fa-calendar"></i>
                                                        <?php the_author_posts(); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3>
                                            <p><?php echo wp_trim_words( get_the_content(), 15, ' ... ' ); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ( get_theme_mod( 'display_pam_sc_partners' ) ) : ?>
            <div class="partners">
                <div class="container">
                    <?php if( get_theme_mod( 'title_h4' ) ) : ?>
                        <h4><?php echo get_theme_mod( 'title_h4', __( 'Parceiros', 'pam' ) ); ?></h4>
                    <?php endif; ?>
                    <div class="slick-slider-area">
                        <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                            <?php
                                $partners_query_args = array(
                                	'post_type' => 'partners',
                                	'nopaging' => true,
                                	'order' => 'ASC',
                                	'orderby' => 'date'
                                )
                            ?>
                            <?php $partners_query = new WP_Query( $partners_query_args ); ?>
                            <?php if ( $partners_query->have_posts() ) : ?>
                                <?php while ( $partners_query->have_posts() ) : $partners_query->the_post(); ?>
                                    <?php PG_Helper::rememberShownPost(); ?>
                                    <div <?php post_class( 'slick-slide-item' ); ?> id="post-<?php the_ID(); ?>">
                                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                            	'class' => 'img-fluid'
                                        ), 'both', null ) ?>
                                    </div>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="slick-prev slick-arrow-buton">
                            <i class="fa fa-angle-left"></i>
                        </div>
                        <div class="slick-next slick-arrow-buton">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </main>
</div>            

<?php get_footer(); ?>