<?php get_header(); ?>

<div class="wrapper">
    <header class="archive-header">
        <h1><?php post_type_archive_title(); ?></h1>
        <p>Explore my latest case studies and design projects.</p>
    </header>

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
