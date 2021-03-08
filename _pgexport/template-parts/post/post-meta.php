<div class="post-meta clearfix">
  <ul>
    <li> 
      <strong><?php echo get_the_author_meta( 'display_name', false ) ?></strong>
    </li>
    <li class="mr-0">
      <span><?php echo get_the_time( 'M d, Y' ) ?></span>
    </li>
    <li class="float-right mr-0">
      <i class="fa fa-commenting-o"></i>
      <?php printf( _nx( '%1$s', '%1$s', get_comments_number(), 'comments title', 'pam' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?>
    </li>
    <li class="float-right">
      <i class="fa fa-calendar"></i>
      <?php the_author_posts(); ?>
    </li>
  </ul>
</div>