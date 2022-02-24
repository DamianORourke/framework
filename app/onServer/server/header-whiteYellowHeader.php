<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

<?php
$custom_logo_id = get_theme_mod( 'custom_logo' );
$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <?php echo get_template_part('/templates/siteIcons', null, null); ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    
  <?php wp_body_open(); ?>

<div id="to-top"></div>

  <div id="page" class="site">

    <div class="container-fluid whiteYellow">

      <div class="tilt-container whiteYellow">
        <div class="tilt-row">
          <nav id="bg-whiteColour" class="navbar navbar-expand-md bg-transparent">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                <?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">'; ?>
              </a>
              <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse"
                  aria-controls="navbarCollapse"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                <img src="<?php echo get_stylesheet_directory_uri() .'/images/hamburger.png'; ?>" alt="">
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="bootscore-navbar" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <!-- Bootstrap 5 Nav Walker Main Menu End -->
            </div>
          </div>
      </nav>
    </div>
  <!-- tilt row  -->
</div>
<!-- tilt container  -->
</div>
<!-- white yellow container  -->

