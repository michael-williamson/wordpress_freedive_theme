<?php
/*
Template Name: contact-us
*/
?>
   
<?php get_header(); ?>

<div class="jumbotron container-fluid mb-0 text-center text-white">

<!-- <h1 class="display-2 my-5 bg-dark text-white pl-3 rounded">Super Cool Widgets!</h1> -->

<div>
<?php echo do_shortcode( '[contact-form-7 id="38" title="Contact"]' ); ?>
</div>

</div> <!-- end of jumbotron-->


<?php get_footer(); ?> 