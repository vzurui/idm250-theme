<article class="case-study-card grid-item"> <!-- Added grid-item class here -->
    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <div class="case-study-image">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <h2><?php the_title(); ?></h2>

    </a>
    <p><?php the_excerpt(); ?></p>
    <a class="read-more-btn" href="<?php the_permalink(); ?>">View Case Study</a>
</article>
