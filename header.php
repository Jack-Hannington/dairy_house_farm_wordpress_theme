<!doctype html>
<html lang="en-GB">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
<script defer src="https://kit.fontawesome.com/eab92a2496.js" crossorigin="anonymous"></script>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site-content">
    <header id="masthead" class="site-header">

      <!-- Start of Navbar -->
      <nav>
        <div class="navbar container">
          <div id="nav-logo" class="logo nav-item">
            <?php
    if (function_exists('the_custom_logo')) {
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<div id="siteTitle" class="siteTitle">' . get_bloginfo('name') . '</div>';
        }
    }
    ?>
          </div>

          <div id="nav-toggle" class="menu-toggle nav-item">
            <div id="showMenu" class="nav-toggle">

              <span></span>
              <span></span>
            </div>

          </div>

          <div class="nav-item menu-container">
            <div class="menu-header">
              <div class="nav-item logo mobile-menu-logo">
                <?php
    if (function_exists('the_custom_logo')) {
        if (has_custom_logo()) {
            the_custom_logo();
        } else {
            echo '<div id="siteTitle" class="siteTitle">' . get_bloginfo('name') . '</div>';
        }
    }
    ?>
              </div>
              <div class="nav-item close-menu">
                <div id="closeMenu" class="nav-toggle">
                  <span>&times;</span>
                </div>
              </div>
            </div>
            <div class="menu-body">
              <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'menu_class' => 'menu',
            'fallback_cb' => false
        )); ?>
            </div>
            <div class="menu-footer">
              <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button w-100" href="<?php echo esc_url(get_theme_mod('dairy_house_navbar_cta_link', '/about')); ?>" title="<?php echo esc_attr(get_theme_mod('dairy_house_navbar_cta_text', 'Contact me')); ?>"><?php echo esc_html(get_theme_mod('dairy_house_navbar_cta_text', 'Contact me')); ?></a>
              </div>
            </div>
          </div>
          <?php if (get_theme_mod('dairy_house_navbar_cta_visible', true)) : ?>
          <div id="nav-cta" class="nav-item menu-cta hide-sm">
              <div class="wp-block-button">
                  <a style="font-family:Playfair; font-size:14px; font-weight:500;" class="dark-grey" href="<?php echo esc_url(get_theme_mod('dairy_house_navbar_cta_link', '/about#contact')); ?>" title="<?php echo esc_attr(get_theme_mod('dairy_house_navbar_cta_text', 'Contact me')); ?>">
                      <?php echo esc_html(get_theme_mod('dairy_house_navbar_cta_text', 'Contact me')); ?>
                  </a>
              </div>
          </div>
      <?php endif; ?>
        </div>
      </nav>

      <?php if (get_theme_mod('dairy_house_alert_bar_visible', false)) : ?>
      <div class="alert-bar">
        <?php echo esc_html(get_theme_mod('dairy_house_alert_bar_text', 'Your default alert bar text here')); ?>
      </div>
      <?php endif; ?>

      <!-- End navbar -->

    </header><!-- #masthead -->