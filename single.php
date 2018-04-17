<?php get_header(); ?>

    <div class="jumbotron container-fluid mb-0">
<!-- when new pages are created -->
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="container bg-dark py-3">
        <h1 class="display-1 text-white col-lg-8 d-inline-block"><?php the_title();?></h1>
        <div class="col-lg-4 d-inline-block">
        <?php the_post_thumbnail("thumbnail" )?>
    </div>


    <div class="bg-light p-3 my-5">
        <p> <?php the_content( ); ?> </p> 
   </div> 
   </div> 

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


</div> 

<?php get_footer(); ?> 