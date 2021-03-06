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

  <div class="container-fluid p-0 <?php echo checkForNavColor(); ?>">

    <div class="tilt-container <?php echo checkForNavColor(); ?>">
        <div class="tilt-row">
          <nav role="navigation" id="bg-whiteColour" class="navbar navbar-expand-md bg-transparent">
            <div class="container-fluid p-0">
              <a id="homePageLink" aria-label="Link to home page" aria-labelledby="homePageLink" title="Go to home page" class="navbar-brand" href="<?php echo esc_url(home_url()); ?>">
                  <img src="<?php echo get_stylesheet_directory_uri() .'/images/tiltLogo.png'; ?>" alt="Tilt, Unconscious Bias Training logo">
              </a>
              <button
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="offcanvas" 
                data-bs-target="#offcanvas-navbar" 
                aria-controls="offcanvas-navbar"
                aria-label="Toggle Navigation"
                aria-expanded="false"
                >
                <img src="<?php echo get_stylesheet_directory_uri() .'/images/hamburger.png'; ?>" alt="An icon representing an 'open menu' call to action">
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
          <!-- inner-container-fluid  -->
      </nav>
      <!-- nav -->
    </div>
  <!-- tilt row  -->
</div>
<!-- tilt container  -->

</div>
<!-- container-fluid  -->

<?php echo get_template_part('templates/offCanvas'); ?>
