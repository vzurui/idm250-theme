<?php get_header(); ?> 

<main class="page-content container">
<?php if (has_post_thumbnail()) : ?>
        <div class="featured-image">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endif; ?>
    <?php if (!is_page('about')) : ?>
        <h1><?php the_title(); ?></h1>
    <?php endif; ?>



    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
            the_content(); 
        endwhile; 
    else : 
        echo '<p>No content found.</p>';
    endif; 
    ?>
</main>

<?php get_footer(); ?>
