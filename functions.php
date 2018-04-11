<?php
    require_once('class-wp-bootstrap-navwalker.php');


    add_theme_support( 'menus' );
    add_theme_support( 'post-thumbnails' );

    function sb_theme_style(){
        wp_enqueue_style( "bootstrap-4", "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
        wp_enqueue_style( "font_awesome_icons", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
        wp_enqueue_style( "google_fonts", "https://fonts.googleapis.com/css?family=IBM+Plex+Sans+Condensed|Open+Sans|Amatic+SC|Averia+G");
        wp_enqueue_style( "style_css", get_template_directory_uri() . "/style.css" );    
    }

    add_action( "wp_enqueue_scripts", 'sb_theme_style' );

    function sb_theme_js(){
        wp_enqueue_script('index_js', get_template_directory_uri() . '/js/index.js',
        array('jquery'), true );
    }
    add_action( 'wp_enqueue_scripts', 'sb_theme_js');

    register_nav_menus(array(
        'primary'=> __('Primary Menu')
    ));

    function business_customize_register($wp_customize){
        $wp_customize->add_section('banner', array(
            'title' => __('Banner', 'mw_flipper_hub'),
            'description' => sprintf(__('Options for homepage banner','mw_flipper_hub')),
            'priority' => 130
        ));
        $wp_customize->add_setting('banner-heading', array(
            'default' => _x('Discover the Deep.', 'mw_flipper_hub'),
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control('banner-heading', array(
            'label' => __('heading', 'mw_flipper_hub'),
            'section' => 'banner',
            'priority' => 20
        ));

    }

    add_action('customize_register','business_customize_register');
?> 