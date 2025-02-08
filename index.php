<?php get_header(); ?>

<main class="post-list">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post">
            <h2 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
            <p class="post-meta">Published on <?php the_date(); ?> in <?php the_category(', '); ?></p>
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                </a>
            <?php endif; ?>
            <div class="post-excerpt">
                <?php the_excerpt(); ?>
            </div>
        </article>
    <?php endwhile; else: ?>
        <p>No posts found.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>