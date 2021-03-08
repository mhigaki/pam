<?php
/*
 The template for displaying: Archive Pages.
 */
?>
<?php get_header(); ?>

<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1><?php post_type_archive_title(); ?></h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumb-area">
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'parents', true, 'Home'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul cms-breadcrumbs-home cms-breadcrumbs-last-item="> li:nth-of-type(1)" cms-breadcrumbs-last-item-name="a">
                                <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?>
                                <li>
                                    <?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?>
                                        <?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
                                        <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a>
                                    <?php endfor; ?>
                                </li>
                                <li>
                                    <span>/</span>
                                    <?php _e( 'Properties Listing', 'pam' ); ?>
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
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-md-7 col-sm-7 col-xs-10 cod-pad">
                            <?php the_widget( 'WP_Widget_Archives', array(
                                  'title' => __( 'Ordenar por:', 'pam' ),
                                  'count' => true,
                                  'dropdown' => true
                                ), array(
                                  'before_widget' => '<div class="sorting-options2">',
                                  'after_widget' => '</div>',
                                  'before_title' => '<span>',
                                  'after_title' => '<span>'
                            ) ); ?>
                        </div>
                    </div>
                </div>
                <!-- Option bar end -->
                <!-- Property box 2 start -->
                <?php
                    $post_date_args = array(
                      'post_type' => 'post',
                      'post_status' => 'publish',
                      'posts_per_page' => 6,
                      'order' => 'DESC',
                      'orderby' => 'date',
                      'cache_results' => false
                    )
                ?>
                <?php $post_date = new WP_Query( $post_date_args ); ?>
                <?php if ( $post_date->have_posts() ) : ?>
                    <div class="row">
                        <?php $post_date_item_number = 0; ?>
                        <?php while ( $post_date->have_posts() && $post_date_item_number++ < 6 ) : $post_date->the_post(); ?>
                            <div class="col-lg-6 col-md-6<?php if( $post_date_item_number == 0) echo ' active'; ?>">
                                <div class="blog-1" id="post-<?php the_ID(); ?>">
                                    <div class="blog-photo">
                                        <?php echo PG_Image::getPostImage( null, 'large', array(
                                              'class' => 'img-fluid'
                                        ), 'both', null ) ?>
                                        <div class="profile-user">
                                            <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?>
                                        </div>
                                    </div>
                                    <div class="detail">
                                        <?php get_template_part( 'template-parts/post/post', 'meta' ); ?>
                                        <h3> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3>
                                        <p><?php echo wp_trim_words( get_the_content(), 15, ' ... ' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    </div>
                <?php endif; ?>
                <!-- properties 2 end -->
                <!-- Page navigation start -->
                <?php get_template_part( 'template-parts/navigation/pagination', 'box' ); ?>
                <!-- Page navigation end-->
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_sidebar( 'right' ); ?>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>