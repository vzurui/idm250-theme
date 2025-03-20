<?php
/**
 * Template Name: Sidebar Page
 * Template Post Type: page
 * Description: A page template with a sidebar.
 */
get_header();
?>


<div class="sidebar-page-container">
    <main class="main-content">
        <?php if (has_post_thumbnail()) : ?>
            <div class="featured-image">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>

        <?php if (!is_page('resume')) : ?>
            <h1><?php the_title(); ?></h1>
        <?php endif; ?>

        <div class="content">
            <?php 
            if (have_posts()) : 
                while (have_posts()) : the_post(); 
                    the_content(); 
                endwhile; 
            else : 
                echo '<p>No content found.</p>';
            endif; 
            ?>
        </div>
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
