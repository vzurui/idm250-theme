<?php get_header(); ?>

<div class="wrapper">
    <?php if (have_posts()) : ?>
        <h1><?php the_archive_title(); ?></h1>

        <div class="grid-container"> 
            <?php while (have_posts()) : the_post(); ?>
                <div class="grid-item">
                <?php include get_template_directory() . '/components/case-study-card.php'; ?>
                </div>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <p>No case studies found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
