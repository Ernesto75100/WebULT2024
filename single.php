<?php

/**
 * The template for displaying pages
 */

get_header(); ?>

<section class="event_list section_padding">
  <div class="container">
   
  <?php
  // Start the loop.
  while (have_posts()) : the_post();
  ?>
  <style>
   @media (max-width:768px) {
    .ppo {
        display: block;
    }
}
  </style>
 <?php
$parent_id = wp_get_post_parent_id(get_the_ID()); // Obtiene el ID de la página padre
if ($parent_id) {
    $parent_link = get_permalink($parent_id); // Obtiene el enlace de la página padre
    echo '<a href="' . $parent_link . '" class="nivel-superior"><i class="fas fa-home"></i></a>';
}
?>	  
	  
 <div class="single_blog_content">
      <div class="post_author">
      <div class="ppo">
    	<br> 
	  </div>
	 <p><i class="la la-user"></i> <?php the_author();?>
     <i class="la la-clock-o"></i> <?php the_date();?></p>
     </div>
     <h2> 
      <?php the_title();?>      
     </h2>
     <br>
     
      <?php if ( has_post_thumbnail() and get_the_post_thumbnail_url()  ) {
            $dat=get_the_post_thumbnail_url();
           ?>
      <div class="d-flex d-sm-flex d-md-flex d-lg-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center align-items-lg-center" style="width: 100%;height: 100%;overflow-x: hidden;overflow-y: hidden;">
      <img src="<?php echo $dat; ?>" width="770" height="420">
                  </div>
        <?php } ?>        
      <p>
      <?php the_content(); ?>
      </p>
       </div>



    <?php
    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) :
      comments_template();
    endif;
    ?>

</div>

  <?php
  // End of the loop.
  endwhile;
  ?>




  <?php get_footer(); ?>