<article class="case-study-card">
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <div class="case-study-image">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <h2><?php the_title(); ?></h2>
    </a>
    <p><?php the_excerpt(); ?></p>
    <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
</article>
