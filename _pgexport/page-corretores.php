<?php
/*
 The template for displaying: Page Corretores
 */
?>
<?php get_header(); ?>

<div class="sub-banner"> 
    <div class="container"> 
        <div class="page-name"> 
            <h1><?php wp_title( '' ); ?></h1> 
        </div>                     
    </div>                 
    <div class="page-info"> 
        <div class="container"> 
            <div class="row"> 
                <div class="col-md-4"> 
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
<div class="our-team-2 content-area"> 
    <div class="container"> 
        <!-- Main title -->                     
        <div class="main-title"> 
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?> 
        </div>                     
        <?php
            $corretor_query_args = array(
              'post_type' => 'corretor',
              'posts_per_page' => 6,
              'order' => 'ASC',
              'orderby' => 'date'
            )
        ?>
        <?php $corretor_query = new WP_Query( $corretor_query_args ); ?>
        <?php if ( $corretor_query->have_posts() ) : ?>
            <div class="row"> 
                <?php while ( $corretor_query->have_posts() ) : $corretor_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div <?php post_class( 'col-xl-4 col-lg-4 col-md-6 col-sm-6' ); ?> id="post-<?php the_ID(); ?>"> 
                        <div class="team-2"> 
                            <div class="team-photo"> 
                                <a href="<?php echo esc_url( get_permalink() ); ?>"> <?php echo PG_Image::getPostImage( null, 'agent', array(
                                          'class' => 'img-fluid'
                                    ), null, null ) ?> </a> 
                            </div>                                         
                            <div class="team-details"> 
                                <h6><?php echo get_field( 'creci_numero' ); ?></h6> 
                                <h5><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h5> 
                                <?php the_content(); ?> 
                                <ul class="social-list clearfix"> 
                                    <li>
                                        <?php if ( get_post_meta( get_the_ID(), 'facebook', true ) ) : ?>
                                            <a href="<?php echo get_post_meta( get_the_ID(), 'field2', true ); ?>" class="facebook"><i class="fa fa-facebook"></i></a>
                                        <?php endif; ?>
                                    </li>                                                 
                                    <li>
                                        <?php if ( get_field( 'twitter' ) ) : ?>
                                            <a href="<?php echo get_field( 'field2' ); ?>" class="twitter"><i class="fa fa-twitter"></i></a>
                                        <?php endif; ?>
                                    </li>                                                 
                                    <li>
                                        <?php if ( get_field( 'instagram' ) ) : ?>
                                            <a href="<?php echo get_field( 'field2' ); ?>" class="instagram"><i class="fa fa-instagram"></i></a>
                                        <?php endif; ?>
                                    </li>                                                 
                                    <li>
                                        <?php if ( get_field( 'linkedin' ) ) : ?>
                                            <a href="<?php echo get_field( 'field2' ); ?>" class="linkedin"><?php echo get_field( 'linkedin' ); ?></a>
                                        <?php endif; ?>
                                    </li>                                                 
                                </ul>                                             
                            </div>                                         
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

<?php get_footer(); ?>