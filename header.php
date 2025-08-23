<?php
/**
 * Header template
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">
  <div class="container header__inner">
    <div class="logo" style="font-weight:800; color: var(--color-primary);">
      <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <?php
          // Fallback: your static image (place it in /assets/img/)
          $logo = get_theme_file_uri('/assets/img/NorthjayTransparent_cropped.png');
          ?>
          <img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" class="site-logo" />
        </a>
      <?php endif; ?>
    </div>

    <!-- Accessible hamburger button -->
    <button class="nav-toggle" id="navToggle"
            aria-expanded="false" aria-controls="navMenu" aria-label="<?php esc_attr_e('Open menu', 'thunderbolt'); ?>">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </button>

    <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => 'nav',
        'container_id'   => 'navMenu',
        'container_class'=> 'nav',
        'menu_class'     => '',
        'fallback_cb'    => function () {
          // Fallback links mirror your static HTML
          echo '<nav id="navMenu" class="nav">' .
                 '<a href="' . esc_url(home_url('/')) . '">Home</a>' .
                 '<a href="' . esc_url(home_url('/services')) . '">Services</a>' .
                 '<a href="#contact">Contact</a>' .
               '</nav>';
        }
      ]);
    ?>
  </div>
</header>
