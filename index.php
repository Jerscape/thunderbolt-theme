<?php
/**
 * Fallback index template
 */
get_header(); ?>

<main class="container section">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class(); ?>>
        <h1><?php the_title(); ?></h1>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      </article>
    <?php endwhile; ?>
  <?php else : ?>
    <p><?php esc_html_e('No content found.', 'thunder'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
