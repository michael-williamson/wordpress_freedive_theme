
<?php get_header(); ?>

    <div class="jumbotron container-fluid mb-0">
    <h1 class="bg-dark mb-3 text-white rounded p-4 ">Blog Posts</h1>
            <!-- when new pages are created -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="container bg-light rounded p-3 my-3">
                    <h1 class="col-5 bg-dark text-white rounded p-1 text-center"><?php the_title();?></h1>
                   <p class="bg-dark text-white rounded"><?php the_content(); ?></p>
                   <?php the_post_thumbnail('thumbnail' )?> 
                </div> 



                <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
    </div>




<?php get_footer(); ?> 