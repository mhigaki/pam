<?php get_header(); ?>

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
                                <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false"><?php _e( 'Descrição', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="two" aria-selected="false"><?php _e( 'Planta', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="three" aria-selected="true"><?php _e( 'Detalhes', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="true"><?php _e( 'Video', 'pam' ); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="5-tab" data-toggle="tab" href="#5" role="tab" aria-controls="5" aria-selected="true"><?php _e( 'Localização', 'pam' ); ?></a>
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
                                    <h3 class="heading-2"><?php _e( 'Planta Baixa', 'pam' ); ?></h3>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><strong><?php _e( 'Metragem', 'pam' ); ?></strong></td>
                                                <td><strong><?php _e( 'Quartos', 'pam' ); ?></strong></td>
                                                <td><strong><?php _e( 'Banheiros', 'pam' ); ?></strong></td>
                                                <td><strong><?php _e( 'Vagas', 'pam' ); ?></strong></td>
                                                <td><strong><?php _e( 'Suítes', 'pam' ); ?></strong></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo get_field( 'informacoes_planta_area' ); ?></td>
                                                <td><?php echo get_field( 'informacoes_planta_quartos' ); ?></td>
                                                <td><?php echo get_field( 'informacoes_planta_banheiros' ); ?></td>
                                                <td><?php echo get_field( 'informacoes_planta_garagem' ); ?></td>
                                                <td><?php echo get_field( 'informacoes_planta_suites' ); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <?php if ( get_field( 'imagem_da_planta' ) ) : ?>
                                        <img src="<?php echo PG_Image::getUrl( get_field( 'imagem_da_planta' ), 'large' ) ?>" alt="floor-plans" class="img-fluid" width="600" height="300">
                                    <?php endif; ?>
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
                        <h3 class="heading-2"><?php _e( 'Área Privativa', 'pam' ); ?></h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <?php $cond_1 = get_field( 'cond_1' ); ?>
                                <?php if ( $cond_1 ) : ?>
                                    <ul class="condition">
                                        <?php foreach ( $cond_1 as $cond_1 ): ?>
                                            <li>
                                                <?php echo $cond_1 ; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <?php $cond_2 = get_field( 'cond_2' ); ?>
                                <?php if ( $cond_2 ) : ?>
                                    <ul class="condition">
                                        <?php foreach ( $cond_2 as $cond_2 ): ?>
                                            <li>
                                                <?php echo $cond_2 ; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <?php $cond_3 = get_field( 'cond_3' ); ?>
                                <?php if ( $cond_3 ) : ?>
                                    <ul class="condition">
                                        <?php foreach ( $cond_3 as $cond_3 ): ?>
                                            <li>
                                                <?php echo $cond_3 ; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Properties condition end -->
                    <!-- Properties amenities start -->
                    <div class="properties-amenities mb-40">
                        <h3 class="heading-2"><?php _e( 'Área Comum', 'pam' ); ?></h3>
                        <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <?php $col_01 = get_field('col_01'); if( $col_01 ): ?>
                                <ul class="amenities">
                                    <?php foreach ( $col_01 as $col_01 ): ?>
                                        <li>
                                            <?php echo $col_01 ; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <?php $col_02 = get_field('col_02');
        if( $col_02 ): ?>
                                <ul class="amenities">
                                    <?php foreach( $col_02 as $col_02 ): ?>
                                        <li>
                                            <?php echo $col_02; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <?php $col_03 = get_field('col_03');
        if( $col_03 ): ?>
                                <ul class="amenities">
                                    <?php foreach( $col_03 as $col_03 ): ?>
                                        <li>
                                            <?php echo $col_03; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            </div>
                            <!-- Properties amenities end -->
                            <!-- Inside properties start -->
                            <!-- Inside properties end -->
                            <!-- Location start -->
                            <!-- Location end -->
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

<?php get_footer(); ?>