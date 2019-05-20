<?php
/*
Template Name: Home
*/
get_header();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
<a class="navbar-brand" href="#">
    <img src="https://getbootstrap.com/docs/4.3/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </li>
    </ul>
</div>

</nav>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Welcome to the Wordpress Starter Kit</h1>
        <p class="lead">This is a basic theme using the wordpress starter kit repo for WordPress local development testing.</p>
        <hr class="my-4">
        <p>This is a demo page with bootstrap loaded and some super basic default theme files</p>
        <a class="btn btn-primary btn-lg" href="https://github.com/spence-man/wordpress-starter-kit" role="button" target="_blank" >Learn more</a>
    </div>
</div>

<div class="container">

<?php if (have_posts()) :
    while (have_posts()) :
        the_post();?>
        <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p><?php the_excerpt();?></p>
        <p><small><?php the_author(); ?></small></p>
        <p><small><?php the_time('F jS, Y');?></small></p>
    <?php endwhile; ?>
<?php endif;?>

</div>
<?php get_footer();
