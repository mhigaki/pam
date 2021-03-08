<?php
/*
 Template Name: Blog 2 Colunas
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="blog-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2><?php wp_title( '' ); ?></h2>
                <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, 'Home'); ?>
                <?php if( !empty( $breadcrumbs ) ) : ?>
                    <ul class="breadcrumbs" cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item=".active" cms-breadcrumbs-last-item-name=".active">
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
                        <li class="active">
                            <?php echo $breadcrumb[ 'name' ]; ?>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="blog-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <?php
                    $post_query_args = array(
                      'post_type' => 'post',
                      'nopaging' => true,
                      'order' => 'ASC',
                      'orderby' => 'date'
                    )
                ?>
                <?php $post_query = new WP_Query( $post_query_args ); ?>
                <?php if ( $post_query->have_posts() ) : ?>
                    <div class="row">
                        <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                            <?php PG_Helper::rememberShownPost(); ?>
                            <div <?php post_class( 'col-lg-6 col-md-6' ); ?> id="post-<?php the_ID(); ?>">
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
                                        <p><?php echo wp_trim_words( get_the_content(), 40, ' ... ' ); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <div class="col-md-12 hidden-mb-45 pagination-box text-center">
                            <nav aria-label="Page navigation example">
                                <?php if ( PG_Pagination::isPaginated() ) : ?>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" <?php echo PG_Pagination::getPreviousHrefAttribute(); ?>><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <?php for( $page_num = 1; $page_num <= PG_Pagination::getMaxPages(); $page_num++) : ?>
                                            <li class="page-item">
                                                <a class="page-link" href="<?php echo esc_url( get_pagenum_link( $page_num ) ) ?>"><?php echo $page_num ?></a>
                                            </li>
                                        <?php endfor; ?>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                <?php endif; ?>
                            </nav>
                        </div>
                    </div>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.', 'pam' ); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-lg-4 col-md-12">
                <?php get_template_part( 'sidebar', 'right' ); ?>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>