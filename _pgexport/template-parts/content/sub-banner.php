<div class="sub-banner">
	<div class="container">
		<div class="page-name">
			<?php if ( single_post_title( '', false )  ) : ?>
				<h1><?php wp_title( '' ); ?></h1>
			<?php endif; ?>
		</div>
	</div>
	<div class="page-info">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="breadcrumb-area">
						<?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, 'Home'); ?>
						<?php if( !empty( $breadcrumbs ) ) : ?>
							<ul cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item="> li:nth-of-type(2)" cms-breadcrumbs-last-item-name="> li:nth-of-type(2)">
								<li>
									<?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?>
										<?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?>
										<a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a>
										<?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?>
											<span>/</span>
										<?php endif; ?>
									<?php endfor; ?>
								</li>
								<?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?>
								<li>
									<?php echo $breadcrumb[ 'name' ]; ?>
								</li>
							</ul>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="contact-info">
						<ul>
							<li>
								<i class="fa fa-phone"></i>
								<?php echo get_field( 'celular' ); ?>
							</li>
							<li>
								<a class="btn btn-md button-theme" href="<?php echo esc_url( get_page_link( PG_Helper::getPostFromSlug( 'contato', 'page' ) ) ); ?>"><?php _e( 'Contate-nos', 'pam' ); ?></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>