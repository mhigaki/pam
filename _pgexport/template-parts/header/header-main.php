<div class="main-header">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand logo" href="<?php echo esc_url( home_url() ); ?>"> <?php if ( get_theme_mod( 'pam_brand_logo' ) ) : ?><img src="<?php echo PG_Image::getUrl( get_theme_mod( 'pam_brand_logo', esc_url( get_template_directory_uri() . '/img/logos/logo-site.svg' ) ), 'large' ) ?>" class="style-svg"><?php endif; ?> </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php wp_nav_menu( array(
            'menu' => 'primary',
            'menu_class' => 'navbar-nav ml-auto',
            'container' => '',
            'depth' => '5',
            'theme_location' => 'primary',
            'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
            'walker' => new wp_bootstrap4_navwalker()
        ) ); ?>
      </div>
    </nav>
  </div>
</div>