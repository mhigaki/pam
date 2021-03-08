<div class="sidebar-right">
  <!-- Search box -->
  <div class="widget search-box">
    <h3 class="sidebar-title"><?php _e( 'Pesquisa', 'pam' ); ?></h3>
    <form class="form-inline form-search" method="GET" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform">
      <div class="form-group">
        <label class="sr-only" for="textsearch2">
          <?php _e( 'Looking for something', 'pam' ); ?>
        </label>
        <input type="text" class="form-control" id="textsearch2" placeholder="Procurando por algo" name="s" value="<?php the_search_query(); ?>">
      </div>
      <button type="submit" class="btn" id="searchsubmit" name="submit" value="<?php esc_attr_e( 'Search', 'pam' ); ?>">
        <i class="fa fa-search"></i>
      </button>
    </form>
  </div>
  <!-- Popular posts start -->
  <?php
    $post_query_args = array(
      'post__in' => PG_Helper::getPostIdList( get_post_thumbnail_id() ),
      'post_type' => 'any',
      'post_status' => 'any',
      'posts_per_page' => 3,
      'ignore_sticky_posts' => true,
      'order' => 'DESC',
      'orderby' => 'date'
    )
  ?>
  <?php $post_query = new WP_Query( $post_query_args ); ?>
  <?php if ( $post_query->have_posts() ) : ?>
    <div class="widget popular-posts">
      <h3 class="sidebar-title"><?php _e( 'Postagens Recentes', 'pam' ); ?></h3>
      <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
        <div <?php post_class( 'media' ); ?> id="post-<?php the_ID(); ?>">
          <div class="media-left">
            <?php echo PG_Image::getPostImage( null, 'thumbnail', array(
                'class' => 'media-object'
            ), 'both', null ) ?>
          </div>
          <div class="media-body">
            <h3 class="media-heading"> <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a> </h3>
            <p><?php the_modified_date(); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  <?php endif; ?>
  <!-- Posts by Start -->
  <div class="posts-by-category widget">
    <h3 class="sidebar-title"><?php _e( 'Categorias', 'pam' ); ?></h3>
    <ul class="list-unstyled list-cat">
      <?php wp_list_categories( array(
          'orderby' => 'name',
          'order' => 'ASC',
          'style' => 'list',
          'show_count' => true,
          'use_desc_for_title' => false,
          'hierarchical' => false,
          'title_li' => '',
          'number' => '5',
          'current_category' => 'blog',
          'taxonomy' => 'category'
      ) ); ?>
    </ul>
  </div>
  <!-- Tags box Start -->
  <div class="widget tags-box">
    <h3 class="sidebar-title"><?php _e( 'Tags', 'pam' ); ?></h3>
    <ul class="tags">
      <li>
        <?php wp_tag_cloud(array(
            'number' => '10',
            'orderby' => 'name',
            'order' => 'ASC',
            'taxonomy' => 'post_tag'
        )); ?>
      </li>
    </ul>
  </div>
  <!-- Latest reviews Start -->
</div>