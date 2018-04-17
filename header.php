<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title><?php wp_title();?></title>
        <?php wp_head()?>
        <style>
            .jumbotron{
                background-image: url(<?php echo get_theme_mod('banner-image',get_bloginfo('template_url').'/images/freedive.jpg'); ?>);
            }
        </style>   
    </head>
    <body>
        <div class="main-wrapper">
        <header class="bg-dark text-white">
        <div class="row">
        <h1 class="col-12 col-lg-4 d-flex align-items-center"><a class="text-white nav-link" href="<?php bloginfo("url" ); ?>">Flipper Hub</a></h1>
        <nav class="navbar navbar-expand-md col-lg-8 col-12 main-navbar navbar-light" id="main-nav" role="navigation">
        <div class="container col-md-12 offset-lg-3 text-center">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler mx-auto bg-white" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse mt-xs-3',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                ) );
                ?>
            </div>
        </nav>        
          </div>
    </header>
