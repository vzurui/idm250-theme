<?php
/**
 * Template Name: Project Listing
 * Description: A custom listing page for displaying case studies.
 */

get_header(); ?>

<div class="project-listing">
  <h1>Case Studies</h1>
  <?php
  // Get the current page for pagination
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  
  // Custom Query for Case Studies
  $args = [
      'post_type'      => 'case-study', // Change to your custom post type
      'posts_per_page' => 9, // Adjust as needed
      'paged'          => $paged,
      'orderby'        => 'date',
      'order'          => 'DESC'
  ];
  
  $query = new WP_Query($args);

  if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
          get_template_part('components/case-study-card'); // Adjust to match your component
      endwhile;

      // Include pagination component (if you have one)
      get_template_part('components/pagination.php');

      wp_reset_postdata();
  else : ?>
      <p>
        <?php esc_html_e('No case studies found.', 'idm250-2025'); ?>
      </p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
