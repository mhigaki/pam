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
	<div class="widget popular-posts">
		<h3 class="sidebar-title"><?php _e( 'Popular Posts', 'pam' ); ?></h3>
		<div class="media">
			<div class="media-left">
				<img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-7.jpg" alt="sub-properties">
			</div>
			<div class="media-body">
				<h3 class="media-heading"> <a href="#"><?php _e( 'Modern Design Building', 'pam' ); ?></a> </h3>
				<p><?php _e( '22 April, 2018', 'pam' ); ?></p>
				<strong><?php _e( '$345,000', 'pam' ); ?></strong>
			</div>
		</div>
		<div class="media">
			<div class="media-left">
				<img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-6.jpg" alt="sub-properties">
			</div>
			<div class="media-body">
				<h3 class="media-heading"> <a href="#"><?php _e( 'Real Eatate Expo 2018', 'pam' ); ?></a> </h3>
				<p><?php _e( '22 April, 2018', 'pam' ); ?></p>
				<strong><?php _e( '$345,000', 'pam' ); ?></strong>
			</div>
		</div>
		<div class="media">
			<div class="media-left">
				<img class="media-object" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/sub-properties/sub-properties-3.jpg" alt="sub-properties">
			</div>
			<div class="media-body">
				<h3 class="media-heading"> <a href="#"><?php _e( 'Villa in Coral Gables', 'pam' ); ?></a> </h3>
				<p><?php _e( '22 April, 2018', 'pam' ); ?></p>
				<strong><?php _e( '$345,000', 'pam' ); ?></strong>
			</div>
		</div>
	</div>
	<!-- Posts by Start -->
	<?php $terms = get_terms( array(
			'taxonomy' => 'post_tag',
			'orderby' => 'name',
			'order' => 'ASC',
			'hide_empty' => true
	) ) ?>
	<div class="posts-by-category widget">
		<h3 class="sidebar-title"><?php _e( 'Category', 'pam' ); ?></h3>
		<?php if( !empty( $terms ) ) : ?>
			<ul class="list-unstyled list-cat">
				<?php $term_i = 0; ?>
				<?php foreach( $terms as $term ) : ?>
					<?php if( $term_i >= 0 && $term_i <= 5 ) : ?>
						<li>
							<a href="<?php echo esc_url( get_term_link( $term ) ); ?>" rel="tag"><?php echo $term->name; ?></a>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
				<?php $term_i++; ?>
			</ul>
		<?php endif; ?>
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