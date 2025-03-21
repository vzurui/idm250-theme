<?php get_header(); ?>

<div class="wrapper">
    <!-- Featured Image for Case Study Archive -->
    <div class="featured-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Featured-image-case-studies.png" alt="Case Studies Archive Banner">
    </div>

    <?php if (have_posts()) : ?>
        <div class="grid-container"> 
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('components/case-study-card'); ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p>No case studies found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
