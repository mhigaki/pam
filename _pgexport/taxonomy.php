<?php get_header(); ?>

<div class="sub-banner">
    <div class="container">
        <div class="page-name">
            <h1><?php wp_title(); ?></h1>
        </div>
    </div>
    <div class="page-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="breadcrumb-area">
                        <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'parents', true, 'Home'); ?>
                        <?php if( !empty( $breadcrumbs ) ) : ?>
                            <ul cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)">
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
<?php if ( is_post_type_archive( 'properties' ) ) : ?>
    <div class="properties-section content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <!-- Option bar start -->
                    <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                        <div class="row">
                            <div class="col-lg-6 col-md-7 col-sm-7 col-xs-10 cod-pad">
                                <div class="sorting-options2">
                                    <?php the_widget( 'WP_Widget_Archives', array(
                                          'title' => __( 'Order by:', 'pam' ),
                                          'count' => true,
                                          'dropdown' => true
                                        ), array(
                                          'before_widget' => '<div class="sorting-options2">',
                                          'after_widget' => '</div>',
                                          'before_title' => '<span>',
                                          'after_title' => '</span>'
                                    ) ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Option bar end -->
                    <!-- Property box 2 start -->
                    <?php
                        $arquivos_args = array(
                          'post_type' => 'properties',
                          'posts_per_page' => 4,
                          'posts_per_archive_page' => '4'
                        )
                    ?>
                    <?php $arquivos = new WP_Query( $arquivos_args ); ?>
                    <?php if ( $arquivos->have_posts() ) : ?>
                        <div <?php post_class( 'row' ); ?> id="post-<?php the_ID(); ?>">
                            <?php while ( $arquivos->have_posts() ) : $arquivos->the_post(); ?>
                                <div class="col-lg-6 col-md-6">
                                    <div class="blog-1">
                                        <div class="blog-photo">
                                            <?php echo PG_Image::getPostImage( null, 'large', array(
                                                  'class' => 'img-fluid'
                                            ), 'both', null ) ?>
                                            <div class="profile-user">
                                                <?php echo get_avatar( get_the_author_meta( 'ID' ), '45' ); ?>
                                            </div>
                                        </div>
                                        <div class="detail">
                                            <div class="post-meta clearfix">
                                                <ul>
                                                    <li>
                                                        <strong><?php echo get_the_author_meta( 'display_name', false ) ?></strong>
                                                    </li>
                                                    <li class="mr-0">
                                                        <span><?php echo get_the_time( get_option( 'date_format' ) ) ?></span>
                                                    </li>
                                                    <li class="float-right mr-0">
                                                        <i class="fa fa-commenting-o"></i>
                                                        <?php printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s', get_comments_number(), 'comments title', 'pam' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?>
                                                    </li>
                                                    <li class="float-right">
                                                        <i class="fa fa-calendar"></i>
                                                        <?php the_author_posts(); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            <h3> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3>
                                            <p><?php echo get_the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        </div>
                    <?php endif; ?>
                    <!-- properties 2 end -->
                    <!-- Page navigation start -->
                    <div class="pagination-box hidden-mb-45 text-center">
                        <nav aria-label="Page navigation example">
                            <?php if ( PG_Pagination::isPaginated($arquivos) ) : ?>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <?php if( PG_Pagination::getCurrentPage() > 1 ) : ?>
                                            <a class="page-link" <?php echo PG_Pagination::getPreviousHrefAttribute( $arquivos ); ?>><i class="fa fa-angle-left"></i></a>
                                        <?php endif; ?>
                                    </li>
                                    <?php for( $page_num = 1; $page_num <= PG_Pagination::getMaxPages( $arquivos ); $page_num++) : ?>
                                        <li class="<?php if( $page_num == PG_Pagination::getCurrentPage() ) echo 'active'; ?> page-item">
                                            <a class="page-link" href="<?php echo esc_url( get_pagenum_link( $page_num ) ) ?>"><?php echo $page_num ?></a>
                                        </li>
                                    <?php endfor; ?>
                                    <li class="page-item">
                                        <?php if( PG_Pagination::getCurrentPage() < PG_Pagination::getMaxPages( $arquivos ) ) : ?>
                                            <a class="page-link" <?php echo PG_Pagination::getNextHrefAttribute( $arquivos ); ?>><i class="fa fa-angle-right"></i></a>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </nav>
                    </div>
                    <!-- Page navigation end-->
                </div>
                <div class="col-lg-4 col-md-12">
                    <?php get_template_part( 'sidebar', 'right' ); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>