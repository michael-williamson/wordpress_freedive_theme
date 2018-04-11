<?php get_header(); ?>

    <div class="jumbotron container-fluid mb-0">
        <h1 class="display-2 text-white bg-dark d-inline-block px-3 rounded col-12">Discover the Deep.</h1> 
        <p class="lead bg-dark text-info p-3 rounded d-inline-block">The blue expanse to spend for a while...</p> 
        <div class="row bg-dark d-flex justify-content-around pt-1 pb-5 col-10 mx-auto mt-5 rounded">
            <h1 class="text-white col-10">Posts</h1>
                <div class="col-3 bg-secondary mx-3 py-3">
                    <h4 class="text-white col-5 d-inline-block">Title</h4>
                    <h6 class="text-white col-5 d-inline-block">Written by </h4>
                    <p class="bg-info text-dark p-3 rounded">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                         Cum sociis natoque penatibus et magnis dis parturient montes, nas</p>
                        <button class="btn btn-primary d-block mx-auto">Read More</button>
                </div>
                <div class="col-3 bg-secondary mx-3 py-3">
                        <h4 class="text-white col-5 d-inline-block">Title</h4>
                        <h6 class="text-white col-5 d-inline-block">Written by </h4>
                        <p class="bg-info text-dark p-3 rounded">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes, nas</p>
                               <button class="btn btn-primary d-block mx-auto">Read More</button>
                </div>
                <div class="col-3 bg-secondary mx-3 py-3">
                        <h4 class="text-white col-5 d-inline-block">Title</h4>
                        <h6 class="text-white col-5 d-inline-block">Written by </h4>
                        <p class="bg-info text-dark p-3 rounded">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                Cum sociis natoque penatibus et magnis dis parturient montes, nas</p>
                               <button class="btn btn-primary d-block mx-auto">Read More</button>
                </div>
            </div>
    </div><!-- end of jumbotron--> 


<!-- when new pages are created -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php endwhile; else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>




<?php get_footer(); ?> 