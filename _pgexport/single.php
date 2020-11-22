<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php get_template_part( 'template-parts/content/blog', 'banner' ); ?>
<?php endif; ?>
<?php get_template_part( 'template-parts/content/content', 'single' ); ?>

<?php get_footer(); ?>