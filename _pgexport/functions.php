<?php
if ( ! function_exists( 'pam_setup' ) ) :

function pam_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'pam', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'pam' ),
        'social'  => __( 'Social Links Menu', 'pam' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image Sizes Begin */

    add_image_size( 'agents', 360, 300, true );
    add_image_size( 'agent', 305, 365, true );
    /* Pinegrow generated Image Sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // pam_setup

add_action( 'after_setup_theme', 'pam_setup' );


if ( ! function_exists( 'pam_init' ) ) :

function pam_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    register_post_type('properties', array(
		'labels' => 
			array(
				'name' => __( 'Propriedades', 'pam' ),
				'singular_name' => __( 'Propriedade', 'pam' )
			),
		'description' => __( 'Cadastro do Imóvel', 'pam' ),
		'public' => true,
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ),
		'has_archive' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-admin-multisite',
		'taxonomies' => array( 'category' )
	));

    register_post_type('corretor', array(
		'labels' => 
			array(
				'name' => __( 'Corretores', 'pam' ),
				'singular_name' => __( 'Corretor', 'pam' )
			),
		'description' => __( 'Nossos Corretores', 'pam' ),
		'public' => true,
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
		'has_archive' => true,
		'show_in_rest' => true,
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-id'
	));

    register_post_type('sliders', array(
		'labels' => 
			array(
				'name' => __( 'Banners', 'pam' ),
				'singular_name' => __( 'Banners', 'pam' )
			),
		'public' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'show_in_menu' => true,
		'menu_icon' => 'dashicons-slides'
	));

    register_post_type('testemonials', array(
		'labels' => 
			array(
				'name' => __( 'Testemonials', 'pam' ),
				'singular_name' => __( 'Testemonial', 'pam' )
			),
		'public' => true,
		'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'revisions', 'page-attributes' ),
		'show_in_rest' => true,
		'show_in_menu' => true
	));

    register_post_type('partners', array(
		'labels' => 
			array(
				'name' => __( 'Partners', 'pam' ),
				'singular_name' => __( 'Partner', 'pam' )
			),
		'public' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'show_in_rest' => true,
		'show_in_menu' => true,
		'taxonomies' => array( 'category' )
	));

    register_post_type('servicos', array(
		'labels' => 
			array(
				'name' => __( 'Nossos Servicos', 'pam' ),
				'singular_name' => __( 'Servico', 'pam' )
			),
		'public' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'show_in_rest' => true,
		'show_in_menu' => true,
		'taxonomies' => array( 'category' )
	));

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    register_taxonomy('properties_types', 'properties', array(
		'labels' => 
			array(
				'name' => __( 'Tipos', 'pam' ),
				'singular_name' => __( 'Tipo', 'pam' )
			),
		'show_in_rest' => true,
		'hierarchical' => true
	));

    register_taxonomy('properties_status', 'properties', array(
		'labels' => 
			array(
				'name' => __( 'Status', 'pam' ),
				'singular_name' => __( 'Situação', 'pam' )
			),
		'show_in_rest' => true,
		'hierarchical' => true
	));

    /* Pinegrow generated Taxonomies End */

}
endif; // pam_setup

add_action( 'init', 'pam_init' );


if ( ! function_exists( 'pam_custom_image_sizes_names' ) ) :

function pam_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin */

    return array_merge( $sizes, array(
        'agents' => __( 'Corretores' ),
        'agent' => __( 'Corretor' )
    ) );

    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'pam_custom_image_sizes_names' );
endif;// pam_custom_image_sizes_names



if ( ! function_exists( 'pam_widgets_init' ) ) :

function pam_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pam_widgets_init' );
endif;// pam_widgets_init



if ( ! function_exists( 'pam_customize_register' ) ) :

function pam_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    $wp_customize->add_section( 'pam_header', array(
		'title' => __( 'Header', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '5'
	));

    $wp_customize->add_section( 'pam_sc_features', array(
		'title' => __( 'Section Features', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '10'
	));

    $wp_customize->add_section( 'pam_sc_services', array(
		'title' => __( 'Section Service', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '20'
	));

    $wp_customize->add_section( 'pam_sc_categories', array(
		'title' => __( 'Section Categories', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '30'
	));

    $wp_customize->add_section( 'pam_sc_counters', array(
		'title' => __( 'Section Counters', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '40'
	));

    $wp_customize->add_section( 'pam_sc_team', array(
		'title' => __( 'Section Team', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '50'
	));

    $wp_customize->add_section( 'pam_sc_testemonial', array(
		'title' => __( 'Section Testemonial', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '60'
	));

    $wp_customize->add_section( 'pam_sc_blog', array(
		'title' => __( 'Section Blog', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '70'
	));

    $wp_customize->add_section( 'pam_sc_footer', array(
		'title' => __( 'Section Footer', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '90'
	));

    $wp_customize->add_section( 'pam_sc_partners', array(
		'title' => __( 'Section Partners', 'pam' ),
		'panel' => 'pam_theme_settings',
		'priority' => '80'
	));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_setting( 'pam_brand_logo', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'pam_brand_logo', array(
		'label' => __( 'Selecione o Logo', 'pam' ),
		'description' => __( 'Informe o Logo da PAM', 'pam' ),
		'type' => 'media',
		'mime_type' => 'image',
		'section' => 'tagline_title',
		'input_attrs' => 
			array(
				'class' => 'style-svg'
			)
	) ) );

    $wp_customize->add_setting( 'display_pam_sc_features', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_features', array(
		'label' => __( 'Display Section Features', 'pam' ),
		'type' => 'checkbox',
		'section' => 'pam_sc_features'
	));

    $wp_customize->add_setting( 'display_pam_sc_properties_load_page', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_properties_load_page', array(
		'label' => __( 'Selecione a Pagina de Novidades', 'pam' ),
		'type' => 'dropdown-pages',
		'section' => 'pam_sc_features'
	));

    $wp_customize->add_setting( 'display_pam_sc_services', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_services', array(
		'label' => __( 'Display Section Service', 'pam' ),
		'description' => __( 'Marque para exibir a seção', 'pam' ),
		'type' => 'checkbox',
		'section' => 'pam_sc_services'
	));

    $wp_customize->add_setting( 'display_pam_sc_service_load_page', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_service_load_page', array(
		'label' => __( 'Selecione a Pagina de Serviços', 'pam' ),
		'type' => 'dropdown-pages',
		'section' => 'pam_sc_services'
	));

    $wp_customize->add_setting( 'display_pam_sc_categories', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_categories', array(
		'label' => __( 'Display Section Categories', 'pam' ),
		'description' => __( 'Marque para exibir a seção', 'pam' ),
		'type' => 'checkbox',
		'section' => 'pam_sc_categories'
	));

    $wp_customize->add_setting( 'display_pam_sc_categories_load_page', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_categories_load_page', array(
		'label' => __( 'Selecione a Pagina de Categorias', 'pam' ),
		'type' => 'dropdown-pages',
		'section' => 'pam_sc_categories'
	));

    $wp_customize->add_setting( 'display_pam_sc_team', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_team', array(
		'label' => __( 'Display Section Team', 'pam' ),
		'description' => __( 'Marque para exibir a seção', 'pam' ),
		'type' => 'checkbox',
		'section' => 'pam_sc_team'
	));

    $wp_customize->add_setting( 'display_pam_sc_team_load_page', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_team_load_page', array(
		'label' => __( 'Selecione a Pagina de Serviços', 'pam' ),
		'type' => 'dropdown-pages',
		'section' => 'pam_sc_team'
	));

    $wp_customize->add_setting( 'display_pam_sc_testemonials', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_testemonials', array(
		'label' => __( 'Display Section Testemonial', 'pam' ),
		'description' => __( 'Marque para exibir a seção', 'pam' ),
		'type' => 'checkbox',
		'section' => 'pam_sc_testemonial'
	));

    $wp_customize->add_setting( 'display_pam_sc_testemonials_load_page', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_testemonials_load_page', array(
		'label' => __( 'Selecione a Pagina de Serviços', 'pam' ),
		'type' => 'dropdown-pages',
		'section' => 'pam_sc_testemonial'
	));

    $wp_customize->add_setting( 'display_pam_sc_blog', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_blog', array(
		'label' => __( 'Display Section Blog', 'pam' ),
		'description' => __( 'Marque para exibir a seção', 'pam' ),
		'type' => 'checkbox',
		'section' => 'pam_sc_blog'
	));

    $wp_customize->add_setting( 'display_pam_sc_blog_load_page', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_blog_load_page', array(
		'label' => __( 'Display Section Blog', 'pam' ),
		'type' => 'dropdown-pages',
		'section' => 'pam_sc_blog'
	));

    $wp_customize->add_setting( 'display_pam_sc_partners', array(
		'type' => 'theme_mod',
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'display_pam_sc_partners', array(
		'label' => __( 'Display Section Partners', 'pam' ),
		'type' => 'checkbox',
		'section' => 'pam_sc_partners'
	));

    $wp_customize->add_setting( 'title_h4', array(
		'type' => 'theme_mod',
		'default' => __( 'Parceiros', 'pam' ),
		'sanitize_callback' => $pgwp_sanitize
	));

    $wp_customize->add_control( 'title_h4', array(
		'label' => __( 'Titulo da Seção', 'pam' ),
		'description' => __( 'Descrição da Seção', 'pam' ),
		'type' => 'text',
		'section' => 'pam_sc_partners'
	));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pam_customize_register' );
endif;// pam_customize_register


if ( ! function_exists( 'pam_enqueue_scripts' ) ) :
    function pam_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_enqueue_script( 'pam-ieemulationmodeswarning', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', null, null, false );

    wp_enqueue_script( 'pam-popper', get_template_directory_uri() . '/js/popper.min.js', null, null, true );

    wp_enqueue_script( 'pam-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', null, null, true );

    wp_enqueue_script( 'pam-bootstrapsubmenu', get_template_directory_uri() . '/js/bootstrap-submenu.js', null, null, true );

    wp_enqueue_script( 'pam-rangeslider', get_template_directory_uri() . '/js/rangeslider.js', null, null, true );

    wp_enqueue_script( 'pam-jquerymbytplayer', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.js', null, null, true );

    wp_enqueue_script( 'pam-wow', get_template_directory_uri() . '/js/wow.min.js', null, null, true );

    wp_enqueue_script( 'pam-bootstrapselect', get_template_directory_uri() . '/js/bootstrap-select.min.js', null, null, true );

    wp_enqueue_script( 'pam-jqueryeasing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', null, null, true );

    wp_enqueue_script( 'pam-jqueryscrollup', get_template_directory_uri() . '/js/jquery.scrollUp.js', null, null, true );

    wp_enqueue_script( 'pam-jquerymcustomscrollbarconcat', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', null, null, true );

    wp_enqueue_script( 'pam-leaflet', get_template_directory_uri() . '/js/leaflet.js', null, null, true );

    wp_enqueue_script( 'pam-leafletproviders', get_template_directory_uri() . '/js/leaflet-providers.js', null, null, true );

    wp_enqueue_script( 'pam-leafletmarkercluster', get_template_directory_uri() . '/js/leaflet.markercluster.js', null, null, true );

    wp_enqueue_script( 'pam-dropzone', get_template_directory_uri() . '/js/dropzone.js', null, null, true );

    wp_enqueue_script( 'pam-slick', get_template_directory_uri() . '/js/slick.min.js', null, null, true );

    wp_enqueue_script( 'filter', get_template_directory_uri() . '/js/jquery.filterizr.js', null, null, true );

    wp_enqueue_script( 'pam-jquerymagnificpopup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', null, null, true );

    wp_enqueue_script( 'pam-jquerycountdown', get_template_directory_uri() . '/js/jquery.countdown.js', null, null, true );

    wp_enqueue_script( 'pam-ieviewportbugworkaround', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', null, null, true );

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_enqueue_style( 'pam-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array( 'pam-fonts' ), null, 'all' );

    wp_enqueue_style( 'pam-animate', get_template_directory_uri() . '/css/animate.min.css', null, null, 'all' );

    wp_enqueue_style( 'pam-bootstrapsubmenu', get_template_directory_uri() . '/css/bootstrap-submenu.css', null, null, 'all' );

    wp_enqueue_style( 'pam-bootstrapselect', get_template_directory_uri() . '/css/bootstrap-select.min.css', null, null, 'all' );

    wp_enqueue_style( 'pam-leaflet', get_template_directory_uri() . '/css/leaflet.css', null, null, 'all' );

    wp_enqueue_style( 'pam-map', get_template_directory_uri() . '/css/map.css', null, null, 'all' );

    wp_enqueue_style( 'pam-fontawesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.min.css', null, null, 'all' );

    wp_enqueue_style( 'pam-flaticon', get_template_directory_uri() . '/fonts/flaticon/font/flaticon.css', null, null, 'all' );

    wp_enqueue_style( 'pam-linearicons', get_template_directory_uri() . '/fonts/linearicons/linearicons.css', null, null, 'all' );

    wp_enqueue_style( 'pam-jquerymcustomscrollbar', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css', null, null, 'all' );

    wp_enqueue_style( 'pam-dropzone', get_template_directory_uri() . '/css/dropzone.css', null, null, 'all' );

    wp_enqueue_style( 'pam-slick', get_template_directory_uri() . '/css/slick.css', null, null, 'all' );

    wp_enqueue_style( 'pam-style', get_template_directory_uri() . '/css/style.css', null, null, 'all' );

    wp_enqueue_style( 'pam-red', get_template_directory_uri() . '/css/skins/red.css', null, null, 'all' );

    wp_enqueue_style( 'pam-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700', null, null, 'all' );

    wp_enqueue_style( 'pam-ieviewportbugworkaround', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css', null, null, 'all' );

    wp_deregister_style( 'pam-style-1' );
    wp_enqueue_style( 'pam-style-1', get_bloginfo('stylesheet_url'), false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pam_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_pg_pagination.php";
require_once "inc/wp_simple_form_mailer.php";
require_once "inc/bootstrap/wp_bootstrap4_navwalker.php";

    /* Pinegrow generated Include Resources End */

/* Enqueue Admin Styles and Scripts */

function pam_selectively_enqueue_admin_script( $page ) {

    // Don't edit anything between the following comments.
    /* Pinegrow generated Enqueue Admin Styles Begin */

    wp_enqueue_style( 'pam-style', get_template_directory_uri() . '/css/style.css', null, null, 'all' );

    wp_enqueue_style( 'pam-red', get_template_directory_uri() . '/css/skins/red.css', null, null, 'all' );

    /* Pinegrow generated Enqueue Admin Styles End */
    
    /* Pinegrow generated Enqueue Admin Scripts Begin */
    /* Pinegrow generated Enqueue Admin Scripts End */
        
}
add_action( 'admin_enqueue_scripts', 'pam_selectively_enqueue_admin_script' );

/* End Enqueue Admin Styles and Scripts */

?>