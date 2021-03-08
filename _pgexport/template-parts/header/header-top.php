<div class="top-header top-header-bg d-none d-xl-block d-lg-block d-md-block" id="top-header-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-sm-7">
        <div class="list-inline">
          <a href="#"><i class="fa fa-phone"></i></a>
          <a href="#"><i class="fa fa-envelope"></i></a>
        </div>
      </div>
      <div class="col-lg-6 col-md-4 col-sm-5">
        <ul class="pull-right top-social-media">
          <?php wp_nav_menu( array(
              'menu' => 'social',
              'menu_class' => 'pull-right top-social-media',
              'container' => '',
              'theme_location' => 'social'
          ) ); ?>
        </ul>
      </div>
    </div>
  </div>
</div>