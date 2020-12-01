<?php
/*
 The template for displaying: 404 pages (not found)
 */
?>
<?php get_header(); ?>

<div class="pages-404 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="error404-content">
                    <div class="error404">
                        <?php _e( '404', 'pam' ); ?>
                    </div>
                    <div class="nobottomborder">
                        <h4><?php wp_title( 'OPS! A ' ); ?></h4>
                        <p><?php the_content(); ?></p>
                    </div>
                    <div class="coming-form clearfix">
                        <form class="form-inline" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" id="searchform1">
                            <input type="text" class="form-control" placeholder="Procurando por algo" value="<?php the_search_query(); ?>" id="textsearch2" name="s">
                            <button type="submit" class="btn" id="searchsubmit" name="submit" value="<?php esc_attr_e( 'Search', 'pam' ); ?>">
                                <?php _e( 'Procurar', 'pam' ); ?>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>