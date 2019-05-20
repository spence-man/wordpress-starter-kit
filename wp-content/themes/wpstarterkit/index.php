<?php
/*
Template Name: Index
*/
get_header();
?>

<div class="wrap">
    <?php if (is_home() && ! is_front_page()) : ?>
        <header class="page-header">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </header>
    <?php else : ?>
    <header class="page-header">
        <h2 class="page-title"><?php _e('Posts', 'twentyseventeen'); ?></h2>
    </header>
    <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if (have_posts()) :
            while (have_posts()) :
                the_post();?>
                <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt();?></p>
                <p><small><?php the_author(); ?></small></p>
                <p><small><?php the_time('F jS, Y');?></small></p>
            <?php endwhile; ?>
        <?php endif;?>
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();

