<?php
/**
 * Template Name: Project Listing
 */

get_header(); ?>

<div class="project-listing">

<?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail('full'); ?>
    </div>
<?php endif; ?>

  <?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = [
    'post_type' => 'case_study', // ✅ Must match register_post_type()
    'posts_per_page' => 6,
    'paged' => $paged,
];
  $query = new WP_Query($args);

  if ($query->have_posts()) :
  ?>
      <div class="grid-container">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
              <?php get_template_part('components/case-study-card'); ?>
          <?php endwhile; ?>
      </div>

      <?php the_posts_pagination(); ?>

      <?php wp_reset_postdata(); ?>
  <?php else : ?>
      <p>No projects found.</p>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
