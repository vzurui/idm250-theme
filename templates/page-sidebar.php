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
        <ul>
            <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
            <li><a href="<?php echo site_url('/projects'); ?>">Work</a></li>
            <li><a href="<?php echo site_url('/about/'); ?>">About</a></li>
            <li><a href="<?php echo site_url('/resume/'); ?>">Resume</a></li>
            <li><a href="<?php echo get_post_type_archive_link('case_study'); ?>">Case Study Archive</a></li>
        </ul>
    </aside>
</div>

<?php get_footer(); ?>
