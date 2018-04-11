<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML,CSS,XML,JavaScript">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title><?php wp_title();?></title>
        <?php wp_head()?>
    </head>
    <body>
        <div class="main-wrapper">
        <header class="bg-dark text-white">
        <div class="row">
        <h1 class="col-12 col-lg-8">Flipper Hub</h1>
        <div class="navbar col-12 col-lg-4">
        <?php
            wp_nav_menu( array(
                'theme_location'	=> 'primary',
                'depth'				=> 1, // 1 = with dropdowns, 0 = no dropdowns.
                'container'			=> false,
                'container_class'	=> 'collapse navbar-collapse',
                'container_id'		=> 'bs-example-navbar-collapse-1',
                'menu_class'		=> 'navbar-nav mr-auto',
                'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
                'walker'			=> new WP_Bootstrap_Navwalker()
            ) );
            ?>
        </div> 
        </div>
    </header>
