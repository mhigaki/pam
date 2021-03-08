<div class="blog-body content-area">
  <div class="container">
    <div class="row">
      <?php if ( have_posts() ) : ?>
        <div class="col-lg-8 col-md-12">
          <!-- Blog box start -->
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content/content', 'pinegrowisthebesteditorintheuniverse' ); ?>
          <?php endwhile; ?>
          <!-- Blog box end -->
          <?php comments_template( '/comments-pam.php', true ); ?>
          <!-- Comments start -->
          <!-- Comments end -->
          <!-- Contact 1 start -->
          <!-- Contact 1 end -->
        </div>
      <?php endif; ?>
      <div class="col-lg-4 col-md-12">
        <?php get_sidebar( 'right' ); ?>
      </div>
    </div>
  </div>
</div>