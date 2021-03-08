<?php get_header(); ?>

<?php get_template_part( 'template-parts/content/sub-banner' ); ?>
<div class="agent-page content-area">
    <div class="container">
        <!-- Heading -->
        <h1 class="heading-2"><?php _e( 'Detalhes do Corretor', 'pam' ); ?></h1>
        <div class="row">
            <div class="col-lg-8">
                <div <?php post_class( 'row team-4' ); ?> id="corretor-<?php the_ID(); ?>">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-pad ">
                        <div class="photo">
                            <?php echo PG_Image::getPostImage( null, 'medium', array(
                                  'class' => 'img-fluid',
                                  'sizes' => 'max-width(320px) 84vw, max-width(640px) 508px, max-width(768px) 70vw, max-width(1024px) 29vw, max-width(1280px) 303px, 303px'
                            ), null, null ) ?>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-pad align-self-center">
                        <div class="detail">
                            <?php if ( get_field( 'creci_numero' ) ) : ?>
                                <h5><?php echo get_field( 'creci_numero' ); ?></h5>
                            <?php endif; ?>
                            <h4><?php the_title(); ?></h4>
                            <div class="contact">
                                <ul>
                                    <?php if ( get_field( 'endereco' ) ) : ?>
                                        <li>
                                            <span><b><?php _e( 'Endereço', 'pam' ); ?></b>:</span>
                                            <?php echo get_field( 'endereco' ); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_field( 'e-mail' ) ) : ?>
                                        <li>
                                            <span><b><?php _e( 'Email', 'pam' ); ?></b>:</span>
                                            <?php echo get_field( 'e-mail' ); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_field( 'telefone_celular' ) ) : ?>
                                        <li>
                                            <span><b><?php _e( 'Celular', 'pam' ); ?></b>:</span>
                                            <?php echo get_field( 'telefone_celular' ); ?>
                                        </li>
                                    <?php endif; ?>
                                    <?php if ( get_field( 'telefone_fixo' ) ) : ?>
                                        <li>
                                            <b><?php _e( 'Telefone Fixo:', 'pam' ); ?></b>
                                            <?php echo get_field( 'telefone_fixo' ); ?>
                                        </li>
                                    <?php endif; ?>
                                    <li class="invisible">
                                        <span><?php _e( 'Website:', 'pam' ); ?></span>
                                        <a href="#"> <?php _e( 'www.themevesselcom', 'pam' ); ?></a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="social-list clearfix">
                                <li>
                                    <?php if ( get_field( 'facebook' ) ) : ?>
                                        <a class="facebook-bg" href="<?php echo get_field( 'facebook' ); ?>"><i class="fa fa-facebook"></i></a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php if ( get_field( 'twitter' ) ) : ?>
                                        <a class="twitter-bg" href="<?php echo get_field( 'twitter' ); ?>"><i class="fa fa-twitter"></i></a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php if ( get_field( 'instagram' ) ) : ?>
                                        <a class="pinterest-bg" href="<?php echo get_field( 'instagram' ); ?>"><i class="fa fa-instagram"></i></a>
                                    <?php endif; ?>
                                </li>
                                <li>
                                    <?php if ( get_field( 'linkedin' ) ) : ?>
                                        <a class="linkedin-bg" href="<?php echo get_field( 'linkedin' ); ?>"><i class="fa fa-linkedin"></i></a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="agent-biography">
                    <h3 class="heading-2"><?php _e( 'Biografia | Resumo', 'pam' ); ?></h3>
                    <?php the_content(); ?>
                    <br>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-right">
                    <!-- Contact 1 start -->
                    <div class="contact-2 widget reviews">
                        <h3 class="sidebar-title"><?php _e( 'Mande uma mensagem', 'pam' ); ?></h3>
                        <?php $mailer = new PG_Simple_Form_Mailer(); ?>
                        <?php $mailer->process( array(
                              'form_id' => 'reviews_mailer_id',
                              'send_to_email' => true,
                              'title' => 'Fale com o Corretor'
                        ) ); ?>
                        <?php if( !$mailer->processed || $mailer->error) : ?>
                            <form action="<?php echo '#reviews_mailer_id'; ?>" method="post" enctype="multipart/form-data" id="reviews_mailer_id" onsubmit="event.stopImmediatePropagation();event.stopPropagation();">
                                <div class="rowo">
                                    <div class="form-group name">
                                        <input class="form-control" type="text" name="name_field" placeholder="Seu Nome" value="<?php echo ( isset( $_POST['name_field'] ) ? $_POST['name_field'] : '' ); ?>"/>
                                    </div>
                                    <div class="form-group email">
                                        <input class="form-control" type="email" name="email" placeholder="Seu Email" value="<?php echo ( isset( $_POST['email'] ) ? $_POST['email'] : '' ); ?>"/>
                                    </div>
                                    <div class="form-group number">
                                        <input class="form-control" type="text" name="phone" placeholder="Seu Telefone de contato" value="<?php echo ( isset( $_POST['phone'] ) ? $_POST['phone'] : '' ); ?>"/>
                                    </div>
                                    <div class="form-group message">
                                        <textarea class="form-control" name="message" placeholder="Escreva sua mensagem"><?php echo ( isset( $_POST['message'] ) ? $_POST['message'] : '' ); ?></textarea>
                                    </div>
                                    <div class="send-btn">
                                        <button class="btn btn-md button-theme btn-block" type="submit">
                                            <?php _e( 'Enviar', 'pam' ); ?>
                                        </button>
                                    </div>
                                </div>
                                <input type="hidden" name="reviews_mailer_id" value="1"/>
                            </form>
                        <?php endif; ?>
                        <?php if( $mailer->processed ) : ?>
                            <?php echo $mailer->message; ?>
                        <?php endif; ?>
                    </div>
                    <!-- Latest reviews Start -->
                </div>
            </div>
        </div>
    </div>
</div>            

<?php get_footer(); ?>