<?php
/*
Template Name: widget-page-template
*/
?>

<?php get_header(); ?>

<div class="jumbotron container-fluid mb-0 widgets-pg">
<!-- some styles for this elements in style.css -->
<h1 class="display-xs-4 display-2 my-5 bg-dark text-white pl-3 rounded">Widgets!</h1>

<div class="row d-flex justify-content-around bg-dark p-5 rounded">
<div class="col-12 col-lg-3 mb-3 rounded">
<?php if(is_active_sidebar('sidebar')) :?>
 <?php dynamic_sidebar('sidebar'); ?>
<?php endif;?> 
</div>

<div class="col-12 col-lg-3 mb-3 rounded">
<?php if(is_active_sidebar('box1')) :?>
 <?php dynamic_sidebar('box1'); ?>
<?php endif;?> 
</div>

<div class="col-12 col-lg-3 mb-3 rounded">
<?php if(is_active_sidebar('box2')) :?>
 <?php dynamic_sidebar('box2'); ?>
<?php endif;?> 
</div>
</div> 

</div> <!-- end of jumbotron-->


<?php get_footer(); ?> 