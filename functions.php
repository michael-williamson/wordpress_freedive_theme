<?php



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
        wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), '3.3.4', true );
        wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), '3.3.4', true );
    }
    add_action( 'wp_enqueue_scripts', 'sb_theme_js');


    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

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

        //background-image
        $wp_customize->add_setting('banner-image', array(
            'default' => get_bloginfo('template_directory').'/img/freedive.jpg',
            'type' => 'theme_mod'
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(  
        $wp_customize,'banner-image',array(
            'label' => __('Background Image', 'mw_flipper_theme'),
            'section' => 'banner',
            'setting'=>'banner_image'
        )));

    }

    add_action('customize_register','business_customize_register');

    function mw_init_widgets($id){
        register_sidebar(array(
            'name'=>'Sidebar',
            'id'=>'sidebar',
            'before_widget'=>'<div class="bg-light">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ));

        register_sidebar(array(
            'name'=>'Box1',
            'id'=>'box1',
            'before_widget'=>'<div class="bg-light">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ));

        register_sidebar(array(
            'name'=>'Box2',
            'id'=>'box2',
            'before_widget'=>'<div class="bg-light">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3>',
            'after_title'=>'</h3>'
        ));
    }

    add_action('widgets_init','mw_init_widgets');
?> 