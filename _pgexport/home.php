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
                                <a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>" rel="nofollow noreferrer noopener"><?php echo $breadcrumb[ 'name' ]; ?></a>
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
            <?php
                $post_query_args = array(
                	'post_type' => 'post',
                	'posts_per_page' => 3,
                	'paged' => get_query_var( 'paged' ) ?: 1,
                	'order' => 'DESC',
                	'orderby' => 'modified'
                )
            ?>
            <?php $post_query = new WP_Query( $post_query_args ); ?>
            <?php if ( $post_query->have_posts() ) : ?>
                <div class="col-lg-8 col-md-12">
                    <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                        <div <?php post_class( 'blog-1' ); ?> id="post-<?php the_ID(); ?>">
                            <div class="blog-photo">
                                <?php echo PG_Image::getPostImage( null, array(0,400),true, array(
                                    	'class' => 'img-fluid',
                                    	'sizes' => 'max-width(320px) 85vw, max-width(640px) 510px, max-width(768px) 90vw, max-width(1024px) 70vw, max-width(1280px) 730px, 730px'
                                ), null, null ) ?>
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
                                            <span><?php the_modified_date(); ?></span>
                                        </li>
                                        <li class="float-right">
                                            <i class="fa fa-calendar"></i>
                                            <?php the_author_posts(); ?>
                                        </li>
                                    </ul>
                                </div>
                                <h3> <a href="<?php echo esc_url( get_permalink() ); ?>" rel="nofollow noreferrer noopener"><?php the_title(); ?></a> </h3>
                                <p><?php echo get_the_excerpt(); ?></p>
                                <a class="read-more" href="blog-single-sidebar-right.html" rel="nofollow noreferrer noopener"><?php _e( 'Saiba Mais', 'pam' ); ?></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <div class="pagination-box hidden-mb-45 text-center">
                        <nav aria-label="Page navigation example">
                            <?php if ( PG_Pagination::isPaginated() ) : ?>
                                <ul class="pagination">
                                    <li class="page-item">
                                        <?php if( PG_Pagination::getCurrentPage() > 1 ) : ?>
                                            <a class="page-link" <?php echo PG_Pagination::getPreviousHrefAttribute(); ?>><i class="fa fa-angle-left"></i></a>
                                        <?php endif; ?>
                                    </li>
                                    <?php for( $page_num = 1; $page_num <= PG_Pagination::getMaxPages(); $page_num++) : ?>
                                        <li class="<?php if( $page_num == PG_Pagination::getCurrentPage() ) echo 'active'; ?> page-item">
                                            <a class="page-link" href="<?php echo esc_url( get_pagenum_link( $page_num ) ) ?>"><?php echo $page_num ?></a>
                                        </li>
                                    <?php endfor; ?>
                                    <li class="page-item">
                                        <?php if( PG_Pagination::getCurrentPage() < PG_Pagination::getMaxPages() ) : ?>
                                            <a class="page-link" <?php echo PG_Pagination::getNextHrefAttribute(); ?>><i class="fa fa-angle-right"></i></a>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            <?php endif; ?>
                        </nav>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-lg-4 col-md-12">
                <?php get_template_part( 'sidebar', 'right' ); ?>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>