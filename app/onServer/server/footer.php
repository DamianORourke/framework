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

<div class="container-fluid footerColor">

<footer class="d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
    <div class="tilt-container footerColor">
        <div class="tilt-row pt-6 pb-5">
            <div class="col6Small col2Medium col2Lg col2Large" style="padding-left: 56px;">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/tiltText.png';?>" alt="" class="img-fluid pb-3">
                <p style="max-width: 250px; width: 100%;" class="mobileCenter pb-3">Transformation in Learning and Training is a start-up project based in Trinity College Dublin.</p>

                <div class="xs-container ms-0">
                    <div class="xs-row">
                        <div class="col-sm-f-1 ms-0" style="position: relative; left: -2px;">
                            <a href="https://www.linkedin.com/company/tiltroleplay" target="_blank" title="Contact Us on LinkedIn">
                                <img src="<?php echo get_stylesheet_directory_uri().'/images/linkedIn.png';?>" class="img-fluid float-left" alt="">
                            </a>
                        </div>
                        <div class="col-sm-f-1 ms-0">
                            <a href="https://twitter.com/tiltroleplay" target="_blank" title="Contact Us on Twitter">
                                <img src="<?php echo get_stylesheet_directory_uri().'/images/twitt.png';?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-sm-f-1 ms-0">
                            <!-- <img src="<?php // echo get_stylesheet_directory_uri().'/images/insta.png';?>" class="img-fluid" alt=""> -->
                        </div>
                        <div class="col-sm-f-1 ms-0">
                            <!-- <img src="<?php // echo get_stylesheet_directory_uri().'/images/linkedIn.png';?>" class="img-fluid" alt=""> -->
                        </div>
                    </div>
                    <!-- xs-row  -->
                </div>
                <!-- xs-container  -->
            </div>
            <!-- col6Small  -->
            <div class="col1Medium col1Lg col1Large ps-2">
                <h4 class="footerTitle">
                    Company
                </h4>
                <ul class="footerMenu">
                    <li>About</li>
                    <li>Contact</li>
                    <li>Blog</li>
                    <li>Terms of service</li>
                    <li>Privacy policy</li>
                </ul>
            </div>
            <div class="col3Medium col3Lg col3Large">
                <div class="tilt-row">
                    <div class="col1Medium col1Lg col1Large m-0 ps-2">
                        <h4 class="footerTitle">
                            For Universities
                        </h4>
                        <ul class="footerMenu">
                            <li>University Game</li>
                            <li>Assessment</li>
                            <li>Resources</li>
                            <li>Support services</li>
                        </ul>
                    </div>
                    <div class="col1Medium col1Lg col1Large m-0 ps-2">
                        <h4 class="footerTitle">
                            For Police
                        </h4>
                        <ul class="footerMenu">
                            <li>Police Game</li>
                            <li>Assessment</li>
                            <li>Resources</li>
                            <li>Support services</li>
                        </ul>
                    </div>
                    <div class="col1Medium col1Lg col1Large m-0">
                        <h4 class="footerTitle">
                            For Organisations
                        </h4>
                        <ul class="footerMenu">
                            <li>Become a trial partner</li>
                            <li>Play demo</li>
                        </ul>
                        <h4 class="footerTitle">
                            Get In Touoch
                        </h4>
                        <p style="font-size: 15px;" >admin&#64;tiltroleplay.com</p>
                    </div>
                </div>
            </div>
            <div class="col3Medium col3Lg col3Large pt-8 pb-4" style="padding-left: 56px;">
                <p>&copy; 2022 TiLT. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- footer hidden on desktop menu items  -->
<footer class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
    <div class="tilt-container footerColor">
        <div class="tilt-row  pb-4">
            <div class="tilt-row pt-6 pb-5">
                <div class="col6Small">
                    <img src="<?php echo get_stylesheet_directory_uri(). '/images/tiltText.png';?>" alt="" class="img-fluid centerImage">
                </div>
            </div>
            <div class="tilt-row pb-5">
                <div class="col6Small">
                    <p class="mobileCenter">Transformation in Learning and Training is a start-up project based in Trinity College Dublin.</p>
                </div>
            </div>
            <div class="tilt-row">
                <div class="tilt-row pb-5">
                    <div class="col1Small">
                        &nbsp;
                    </div>
                    <div class="col1Small">
                        <a href="https://www.linkedin.com/company/tiltroleplay" target="_blank" title="Contact Us on LinkedIn">
                            <img src="<?php echo get_stylesheet_directory_uri(). '/images/linkedIn.png';?>" class="img-fluid float-right" alt="">
                        </a>
                    </div>
                    <div class="col1Small">
                        <a href="https://twitter.com/tiltroleplay" target="_blank" title="Contact Us on Twitter">
                            <img src="<?php echo get_stylesheet_directory_uri(). '/images/twitt.png';?>" class="img-fluid centerImage" alt="">
                        </a>
                    </div>
                    <div class="col1Small">
                        <!-- <img src="<?php //echo get_stylesheet_directory_uri(). '/images/insta.png';?>" class="img-fluid centerImage" alt=""> -->
                    </div>
                    <div class="col1Small">
                        <!-- <img src="<?php //echo get_stylesheet_directory_uri(). '/images/linkedIn.png';?>" class="img-fluid float-left" alt=""> -->
                    </div>
                    <div class="col1Small">
                        &nbsp;
                    </div>
                </div>
            </div>
            <div class="col3Small">
                <h4 class="footerTitle">
                    Company
                </h4>
                <ul class="footerMenu">
                    <li>About</li>
                    <li>Contact</li>
                    <li>Blog</li>
                    <li>Terms of service</li>
                    <li>Privacy policy</li>
                </ul>
            </div>
            <div class="col3Small">
                <h4 class="footerTitle">
                    For Universities
                </h4>
                <ul class="footerMenu">
                    <li>University Game</li>
                    <li>Assessment</li>
                    <li>Resources</li>
                    <li>Support services</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer menu items  -->
    <div class="tilt-container footerColor">
        <div class="tilt-row  pb-4">
            <div class="col3Small">
                <h4 class="footerTitle">
                    For Police
                </h4>
                <ul class="footerMenu">
                    <li>Police Game</li>
                    <li>Assessment</li>
                    <li>Resources</li>
                    <li>Support services</li>
                </ul>
            </div>
            <div class="col3Small">
                <h4 class="footerTitle">
                    For Organisations
                </h4>
                <ul class="footerMenu">
                    <li>Become a trial partner</li>
                    <li>Play demo</li>
                </ul>
            </div>
        </div>
    </div>

     <!-- footer menu items  -->
     <div class="tilt-container footerColor">
        <div class="tilt-row pb-4">
            <div class="col3Small">
                <h4 class="footerTitle">
                    Get In Touoch
                </h4>
                <p>admin&#64;tiltroleplay.com</p>
            </div>
        </div>
    </div>

    <!-- copyrite  -->
    <div class="tilt-container footerColor">
        <div class="tilt-row pb-5">
            <div class="col6Small">
                <p class="mobileCenter">
                    &copy; 2022 TiLT. All rights reserved.
                </p>
            </div>
        </div>
    </div>

</footer>
<!-- end hidden desktop  -->


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