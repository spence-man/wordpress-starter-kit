<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 
get_header(); ?>
 
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
        <?php if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
            <div class="entry">
                <?php the_content(); ?>
            </div>
            <?php endwhile;?>
        <?php endif; ?>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
 
<?php get_footer(); ?>