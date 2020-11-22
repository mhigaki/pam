<?php get_header(); ?>

            <div class="sub-banner">
                <div class="container">
                    <div class="page-name">
                        <h1><?php _e( 'Detalhes do Imóvel', 'pam' ); ?></h1>
                    </div>
                </div>
                <div class="page-info">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="breadcrumb-area">
                                    <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, 'Home'); ?>
                                    <?php if( !empty( $breadcrumbs ) ) : ?>
                                        <ul cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)" cms-breadcrumbs-home>
                                            <li>
                                                <?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?>
                                                    <?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
                                                    <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a>
                                                    <?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?>
                                                        <span>/</span>
                                                    <?php endif; ?>
                                                <?php endfor; ?>
                                            </li>
                                            <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?>
                                            <li>
                                                <?php echo $breadcrumb[ 'name' ]; ?>
                                            </li>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
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
            <div class="properties-details-page content-area">
                <?php
$endereco = get_field( 'endereco' );
$cidade = get_field( 'cidade' );
//code ?>
                <div class="container">
                    <div class="row">
                        <div <?php post_class( 'col-lg-8 col-md-12' ); ?> id="post-<?php the_ID(); ?>">
                            <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                                <div class="heading-properties">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-left">
                                                <h3><?php _e( 'Beautiful Single Home', 'pam' ); ?></h3>
                                                <p><i class="fa fa-map-marker"></i> <?php _e( '20/F Green Road, Dhanmondi, Dhaka', 'pam' ); ?></p>
                                            </div>
                                            <div class="p-r">
                                                <h3><?php _e( '$420,00', 'pam' ); ?></h3>
                                                <p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- main slider carousel items -->
                                <?php echo get_field( 'slides_do_imovel' ); ?>
                                <!-- main slider carousel nav controls -->
                                <!-- main slider carousel items -->
                                <!-- Heading properties start -->
                                <div class="heading-properties">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="pull-left">
                                                <h3><?php the_title(); ?></h3>
                                                <p> <i class="fa fa-map-marker"></i> <?php echo "$endereco - $cidade" ?> </p>
                                            </div>
                                            <div class="pull-right">
                                                <h3><span class="text-right"><?php echo get_field( 'preco' ); ?></span></h3>
                                                <?php $terms = get_the_terms( get_the_ID(), 'properties_status' ) ?>
                                                <?php if( !empty( $terms ) ) : ?>
                                                    <?php $term_i = 0; ?>
                                                    <?php foreach( $terms as $term ) : ?>
                                                        <?php if( $term_i == 0 ) : ?>
                                                            <h5><?php echo $term->name; ?></h5>
                                                        <?php endif; ?>
                                                        <?php $term_i++; ?>
                                                    <?php endforeach; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Heading properties end -->
                            </div>
                            <div class="property-meta mb-40">
                                <ul>
                                    <?php if ( get_field( 'informacoes_planta_quartos' ) ) : ?>
                                        <li>
                                            <i class="flaticon-furniture"></i>
                                            <p><?php echo get_field( 'informacoes_planta_quartos' ); ?></p>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_field( 'informacoes_planta_banheiros' ) ) : ?>
                                        <li>
                                            <i class="flaticon-holidays"></i>
                                            <p><?php echo get_field( 'informacoes_planta_banheiros' ); ?></p>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_field( 'informacoes_planta_area' ) ) : ?>
                                        <li>
                                            <i class="flaticon-square"></i>
                                            <p><?php echo get_field( 'informacoes_planta_area' ); ?></p>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_field( 'informacoes_planta_garagem' ) ) : ?>
                                        <li>
                                            <i class="lnr lnr-car"></i>
                                            <p><?php echo get_field( 'informacoes_planta_garagem' ); ?></p>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                            <!-- Property meta start -->
                            <!-- Property meta end -->
                            <!-- Advanced search start -->
                            <!-- Advanced search end -->
                            <!-- Properties description start -->
                            <div class="properties-description mb-40">
                                <h3 class="heading-2"><?php _e( 'Descrição', 'pam' ); ?></h3>
                                <p><?php the_content( null, true ); ?></p>
                            </div>
                            <!-- Properties description end -->
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
                            <!-- Floor plans start -->
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
                            <?php if ( get_field( 'video_do_imovel' ) ) : ?>
                                <div class="inside-properties mb-50">
                                    <h3 class="heading-2"><?php _e( 'Vídeo do Imóvel', 'pam' ); ?></h3>
                                    <iframe src="https://www.youtube.com/embed/bo_efYhYU2A" allowfullscreen="">
                                        <?php echo get_field( 'video_do_imovel' ); ?>
                                    </iframe>
                                </div>
                            <?php endif; ?>
                            <?php if ( get_field( 'mapa_do_imovel' ) ) : ?>
                                <div class="location mb-50">
                                    <div class="map">
                                        <h3 class="heading-2"><?php _e( 'Localização do Imóvel', 'pam' ); ?></h3>
                                        <?php echo get_field( 'mapa_do_imovel' ); ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <!-- Similar Properties start -->
                            <!-- Similar Properties end -->
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="sidebar-left">
                                <!-- Advanced search start -->
                                <!-- Posts by category start -->
                                <div class="posts-by-category widget">
                                    <h3 class="sidebar-title"><?php _e( 'Categoria', 'pam' ); ?></h3>
                                    <?php $terms = get_terms( array(
                                        	'taxonomy' => 'properties_types',
                                        	'orderby' => 'name',
                                        	'order' => 'ASC',
                                        	'hide_empty' => true
                                    ) ) ?>
                                    <?php if( !empty( $terms ) ) : ?>
                                        <ul class="list-unstyled list-cat">
                                            <?php foreach( $terms as $term ) : ?>
                                                <li>
                                                    <a href="<?php echo esc_url( get_term_link( $term ) ); ?>" rel="tag"><?php echo $term->name; ?></a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
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
                                <?php
                                    $corretor_query_args = array(
                                    	'post_type' => 'corretor',
                                    	'nopaging' => true,
                                    	'order' => 'ASC',
                                    	'orderby' => 'date'
                                    )
                                ?>
                                <?php $corretor_query = new WP_Query( $corretor_query_args ); ?>
                                <?php if ( $corretor_query->have_posts() ) : ?>
                                    <div class="team-5 widget">
                                        <h3 class="sidebar-title"><?php _e( 'Contact Agent', 'pam' ); ?></h3>
                                        <?php while ( $corretor_query->have_posts() ) : $corretor_query->the_post(); ?>
                                            <?php PG_Helper::rememberShownPost(); ?>
                                            <div <?php post_class( 'media' ); ?> id="post-<?php the_ID(); ?>">
                                                <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo PG_Image::getPostImage( null, 'thumbnail', null, 'both', null ) ?> </a>
                                                <div class="media-body align-self-center">
                                                    <h5> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h5>
                                                    <p><i class="flaticon-technology-1"></i><?php echo get_post_meta( get_the_ID(), 'telefone_celular', true ); ?></p>
                                                    <p><i class="flaticon-envelope"></i><?php echo get_field( 'e-mail' ); ?></p>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                        <?php wp_reset_postdata(); ?>
                                    </div>
                                <?php else : ?>
                                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                                <?php endif; ?>
                                <!-- Financing calculator start -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main header end -->
            <!-- Sub banner start -->
            <!-- Sub Banner end -->
            <!-- Properties details page start -->
            <!-- Properties details page end -->
            <!-- Footer start -->
            <!-- Footer end -->
            <!-- Full Page Search -->
            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
            <!-- Custom javascript -->            

<?php get_footer(); ?>