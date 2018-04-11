<?php get_header(); ?>


<!-- when new pages are created -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

        <h1 class="display-1"><?php the_title();?></h1>

   <p> <?php the_content( ); ?> </p> 

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?> 