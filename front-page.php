<?php get_header(); ?>

    <div class="jumbotron container-fluid mb-0">

        <h1 class="display-2 text-white bg-dark d-inline-block px-3 rounded col-12 banner-text">
            <?php echo get_theme_mod('banner-heading','banner-heading'); ?>
        </h1> 
        <p class="lead bg-dark text-info p-3 rounded d-inline-block">Th blue expanse to spend for a while...</p> 
        <div class="row bg-dark d-flex justify-content-around pt-1 pb-5 col-10 mx-auto mt-5 rounded">
            <h1 class="text-white col-10">Posts</h1>



<?php
$args = array(
    'posts_per_page'    => 3,
    'post_type'     => 'post',  //choose post type here
    'order' => 'DESC',
);
// query
$the_query = new WP_Query( $args );


if( $the_query->have_posts() ):
    while( $the_query->have_posts() ) : $the_query->the_post();?>

    <div class=" col-12 col-lg-3 bg-secondary mx-3 py-3 mb-3">
    <h4 class="text-white col-5 d-inline-block"><?php the_title(); ?></h4>
    <h6 class="text-white col-5 d-inline-block">Written by <?php the_author();?></h4>
    <p class="bg-info text-dark p-3 rounded"><?php the_excerpt();?></p>
        <button class="btn btn-primary d-block mx-auto"><a href="<?php the_permalink();?>"
        class="text-white">
        Read More</a>
        </button>
</div>


<?php
    endwhile; 
else :
	 esc_html_e( 'Sorry, no posts matched your criteria.' ); 
endif; 
?>
    </div> 
    </div><!-- end of jumbotron--> 

<?php get_footer(); ?> 