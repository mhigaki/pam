<div class="blog-1 blog-big">
  <?php echo PG_Image::getPostImage( null, 'large', array(
      'class' => 'img-fluid'
  ), null, null ) ?>
  <div class="blog-photo">
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
        <li class="float-right">
          <i class="fa fa-calendar"></i>
          <?php the_author_posts(); ?>
        </li>
      </ul>
    </div>
    <h3> <?php the_title(); ?> </h3>
    <p><?php the_content(); ?></p>
  </div>
  <div class="row clearfix">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="blog-tags">
        <span><?php _e( 'Tags', 'pam' ); ?></span>
        <?php $terms = get_the_terms( get_the_ID(), 'post_tag' ) ?>
        <?php if( !empty( $terms ) ) : ?>
          <?php foreach( $terms as $term ) : ?>
            <a href="<?php echo esc_url( get_term_link( $term, 'post_tag' ) ) ?>"><?php echo $term->name; ?></a>
          <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="blog-social-list">
        <span><?php _e( 'Share', 'pam' ); ?></span>
        <a href="#" class="facebook-bg"> <i class="fa fa-facebook"></i> </a>
        <a href="#" class="twitter-bg"> <i class="fa fa-twitter"></i> </a>
        <a href="#" class="google-bg"> <i class="fa fa-google"></i> </a>
        <a href="#" class="linkedin-bg"> <i class="fa fa-linkedin"></i> </a>
        <a href="#" class="pinterest-bg"> <i class="fa fa-pinterest"></i> </a>
      </div>
    </div>
  </div>
</div>