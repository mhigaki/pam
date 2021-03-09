<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="author" content="MNH">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <div class="page_loader"></div>
        <header class="site-header">
            <?php get_template_part( 'template-parts/header/header', 'top' ); ?>
            <?php get_template_part( 'template-parts/header/header', 'main' ); ?>
        </header>
        <main>