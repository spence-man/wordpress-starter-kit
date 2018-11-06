<?php
/**
 * The main template file
 */
?>

<?php 
wp_head();
if (have_posts()) :
   while (have_posts()) :
      the_post();
      
   endwhile;
endif;
wp_footer();
