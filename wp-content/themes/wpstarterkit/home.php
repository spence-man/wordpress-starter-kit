<?php
/*
Template Name: Home
*/
get_header();
?>

<?php if (have_posts()) :
    while (have_posts()) :
        the_post();?>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt();?></p>
        <p><small><?php the_author(); ?></small></p>
        <p><small><?php the_time('F jS, Y');?></small></p>
    <?php endwhile; ?>
<?php endif;?>

<?php get_footer();
