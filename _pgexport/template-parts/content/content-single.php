<div class="blog-body content-area">
	<div class="container">
		<div class="row">
			<?php if ( have_posts() ) : ?>
				<div class="col-lg-8 col-md-12">
					<!-- Blog box start -->
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="blog-1 blog-big">
							<?php echo PG_Image::getPostImage( null, 'large', array(
									'class' => 'img-fluid'
							), 'both', null ) ?>
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
										<li class="float-right mr-0">
											<i class="fa fa-commenting-o"></i>
											<?php printf( _nx( 'One thought on &ldquo;%2$s&rdquo;', '%1$s', get_comments_number(), 'comments title', 'pam' ), number_format_i18n( get_comments_number() ), get_the_title() ); ?>
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
										<?php the_terms( get_the_ID(), 'post_tag' ); ?>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
					<!-- Blog box end -->
					<!-- Comments start -->
					<!-- Comments end -->
					<!-- Contact 1 start -->
					<!-- Contact 1 end -->
				</div>
			<?php endif; ?>
			<div class="col-lg-4 col-md-12">
				<?php get_template_part( 'sidebar', 'right' ); ?>
			</div>
		</div>
	</div>
</div>