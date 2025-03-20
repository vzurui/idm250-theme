<?php
/**
 * Template Name: Sidebar Page
 * Description: A page template with a sidebar.
 */
get_header();
?>

<div class="sidebar-page-container">
    <main class="main-content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            <?php endif; ?>

            <h1><?php the_title(); ?></h1>
            <div class="content">
                <?php the_content(); ?>
            </div>

        <?php endwhile; endif; ?>
    </main>

    <aside class="sidebar">
        <h2>Quick Links</h2>
        <ul>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Case Studies</a></li>
            <li><a href="#">Resume</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </aside>
</div>

<?php get_footer(); ?>
