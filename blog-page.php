<?php
/*
Template Name: blog-page
*/
?>

<?php get_header(); ?>

    <div class="jumbotron container-fluid mb-0">
            <!-- when new pages are created -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <h1><?php the_title();?></h1>

                <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
    </div>




<?php get_footer(); ?> 