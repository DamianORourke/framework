<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

?>

<footer>

  <div class="bootscore-footer bg-darkColour pt-5 pb-3">
    <div class="container">

      <!-- Top Footer Widget -->
      <?php if (is_active_sidebar('top-footer')) : ?>
        <div>
          <?php dynamic_sidebar('top footer'); ?>
        </div>
      <?php endif; ?>

      <div class="row">
        
        <div id="footerOne" class="col-12">
          
          
        </div>
        <!-- Footer 1 Widget -->
        <div id="footerOne" class="col-12 col-md-3 col-lg-3">
          <p style="color: #fff;">Copyright&nbsp;<?php echo Date('Y'); ?>.</p>
          <?php if (is_active_sidebar('footer-1')) : ?>
            <div>
              <?php dynamic_sidebar('footer-1'); ?>
            </div>
          <?php endif; ?>
        </div>

        <!-- Footer 2 Widget -->
        <div id="footerTwo" class="col-12 col-md-3 col-lg-3">
          <!-- Bootstrap 5 Nav Walker Footer Menu -->
            <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-first-menu',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="footer-menu" class="%2$s">%3$s</ul>',
              'depth' => 1,
              'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
        </div>

        <!-- Footer 3 Widget -->
        <div id="footerThree" class="col-12 col-md-3 col-lg-3">
          <!-- Bootstrap 5 Nav Walker Footer Menu -->
          <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-second-menu',
              'container' => false,
              'menu_class' => '',
              'fallback_cb' => '__return_false',
              'items_wrap' => '<ul id="footer-menu-two" class="%2$s">%3$s</ul>',
              'depth' => 1,
              'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
        </div>

        <!-- Footer 4 Widget -->
        <div id="footerFour" class="col-12 col-md-3 col-lg-3">
          <?php if (is_active_sidebar('footer-4')) : ?>
            <div>
              <?php dynamic_sidebar('footer-4'); ?>
            </div>
          <?php endif; ?>
        </div>
        <!-- Footer Widgets End -->

      </div>

      
    </div>
  </div>

</footer>

<!-- <div class="top-button position-fixed zi-1020">
  <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i></a>
</div> -->

</div><!-- #page -->

<?php wp_footer(); ?>



</div>
<!-- container fluid -->


</body>

</html>