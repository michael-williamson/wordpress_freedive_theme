<?php get_header(); ?>

    <div class="jumbotron container-fluid mb-0">
<!-- when new pages are created -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="container bg-dark">
        <h1 class="display-1 text-white"><?php the_title();?></h1>

   <p> <?php the_content( ); ?> </p> 

   <?php the_post_thumbnail( )?> 

   </div> 

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</div> 

<?php get_footer(); ?> 