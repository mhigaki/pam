<div class="comments-area" id="comments">
  <?php printf( _nx( '%1$s comentário', '%1$s comentários', get_comments_number(), 'comments title', 'pam' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?>
  <ul class="comments">
    <?php wp_list_comments( array(
        'max_depth' => '2',
        'style' => 'ul',
        'callback' => 'pam_comments',
        'per_page' => '3',
        'avatar_size' => '60',
        'format' => 'html5'
    ) ); ?>
  </ul>
  <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>
    <p class="no-comments"><?php _e( 'Comments are closed.', 'pam'); ?></p>
  <?php } ?>
  <?php comment_form(); ?>
</div>