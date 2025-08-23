<?php
/**
 * Template: Posts Index (Blog)
 * Used automatically for the page set as “Posts page” in Settings → Reading.
 */
get_header(); ?>

<main class="container section">
  <h1 class="page-title">
    <?php echo esc_html( get_the_title( get_option('page_for_posts') ) ?: 'Blog' ); ?>
  </h1>

  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('post-card'); ?>>
        <h2 class="post-card__title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <div class="post-card__meta">
          <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date()); ?></time>
          • <?php the_category(', '); ?>
        </div>
        <div class="post-card__excerpt">
          <?php the_excerpt(); ?>
        </div>
        <p><a class="btn btn--ghost" href="<?php the_permalink(); ?>">Read more</a></p>
      </article>
    <?php endwhile; ?>

    <nav class="pagination">
      <?php the_posts_pagination([
        'mid_size'  => 2,
        'prev_text' => __('← Newer', 'yourtheme'),
        'next_text' => __('Older →', 'yourtheme'),
      ]); ?>
    </nav>

  <?php else : ?>
    <p><?php esc_html_e('No posts yet.', 'yourtheme'); ?></p>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
