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
                <!-- <ul class="footerMenu">
                    <li>About</li>
                    <li>Contact</li>
                    <li>Blog</li>
                    <li>Terms of service</li>
                    <li>Privacy policy</li>
                </ul> -->
                <!-- Footer 1 Menu -->
                    <!-- Bootstrap 5 Nav Walker Footer Menu -->
                        <?php
                            wp_nav_menu(array(
                            'theme_location' => 'footer-first-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                <!-- // footer 1 Menu  -->

            </div>
            <div class="col3Medium col3Lg col3Large">
                <div class="tilt-row">
                    <div class="col1Medium col1Lg col1Large m-0">
                        <h4 class="footerTitle">
                            For higher education
                        </h4>
                        <!-- <ul class="footerMenu">
                            <li>University Game</li>
                            <li>Assessment</li>
                            <li>Resources</li>
                            <li>Support services</li>
                        </ul> -->

                        <!-- Footer 2 Menu -->
                            <!-- Bootstrap 5 Nav Walker Footer Menu -->
                            <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'footer-second-menu',
                                    'container' => false,
                                    'menu_class' => '',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                                    'depth' => 1,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                    ));
                                ?>
                            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                        <!-- // footer 1 Menu  -->

                    </div>
                    <div class="col1Medium col1Lg col1Large m-0 ps-2">
                        <h4 class="footerTitle">
                            For police
                        </h4>
                        <!-- <ul class="footerMenu">
                            <li>Police Game</li>
                            <li>Assessment</li>
                            <li>Resources</li>
                            <li>Support services</li>
                        </ul> -->

                        <!-- Footer 3 Menu -->
                            <!-- Bootstrap 5 Nav Walker Footer Menu -->
                            <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'footer-third-menu',
                                    'container' => false,
                                    'menu_class' => '',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                                    'depth' => 1,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                    ));
                                ?>
                            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                        <!-- // footer 3 Menu  -->
                    </div>
                    <div class="col1Medium col1Lg col1Large m-0">
                        <h4 class="footerTitle">
                            For Organisations
                        </h4>
                        <!-- <ul class="footerMenu">
                            <li>Become a trial partner</li>
                            <li>Play demo</li>
                        </ul> -->
                        <!-- Footer 4 Menu -->
                            <!-- Bootstrap 5 Nav Walker Footer Menu -->
                            <?php
                                    wp_nav_menu(array(
                                    'theme_location' => 'footer-fourth-menu',
                                    'container' => false,
                                    'menu_class' => '',
                                    'fallback_cb' => '__return_false',
                                    'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                                    'depth' => 1,
                                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                                    ));
                                ?>
                            <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                        <!-- // footer 1 Menu  -->
                        <h4 class="footerTitle">
                            Get In Touoch
                        </h4>
                        <p style="font-size: 15px;" >admin&#64;tiltroleplay.com</p>
                    </div>
                </div>
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
                <!-- <ul class="footerMenu">
                    <li>About</li>
                    <li>Contact</li>
                    <li>Blog</li>
                    <li>Terms of service</li>
                    <li>Privacy policy</li>
                </ul> -->
                <!-- Footer 2 Menu -->
                    <!-- Bootstrap 5 Nav Walker Footer Menu -->
                    <?php
                            wp_nav_menu(array(
                            'theme_location' => 'footer-first-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                <!-- // footer 1 Menu  -->
            </div>
            <div class="col3Small">
                <h4 class="footerTitle">
                    For Universities
                </h4>
                <!-- <ul class="footerMenu">
                    <li>University Game</li>
                    <li>Assessment</li>
                    <li>Resources</li>
                    <li>Support services</li>
                </ul> -->
                <!-- Footer 2 Menu -->
                    <!-- Bootstrap 5 Nav Walker Footer Menu -->
                    <?php
                            wp_nav_menu(array(
                            'theme_location' => 'footer-second-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                <!-- // footer 2 Menu  -->
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
                <!-- <ul class="footerMenu">
                    <li>Police Game</li>
                    <li>Assessment</li>
                    <li>Resources</li>
                    <li>Support services</li>
                </ul> -->
                <!-- Footer 3 Menu -->
                    <!-- Bootstrap 5 Nav Walker Footer Menu -->
                    <?php
                            wp_nav_menu(array(
                            'theme_location' => 'footer-third-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                <!-- // footer 3 Menu  -->
            </div>
            <div class="col3Small">
                <h4 class="footerTitle">
                    For Organisations
                </h4>
                <!-- <ul class="footerMenu">
                    <li>Become a trial partner</li>
                    <li>Play demo</li>
                </ul> -->
                <!-- Footer 4 Menu -->
                    <!-- Bootstrap 5 Nav Walker Footer Menu -->
                    <?php
                            wp_nav_menu(array(
                            'theme_location' => 'footer-fourth-menu',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="footer-menu" class="%2$s footerMenu">%3$s</ul>',
                            'depth' => 1,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                            ));
                        ?>
                    <!-- Bootstrap 5 Nav Walker Footer Menu End -->
                <!-- // footer 4 Menu  -->
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

</footer>
<!-- end hidden desktop  -->


<footer class="container-fluid footerColor">
    <?php if (is_active_sidebar('footer-1')) : ?>
        <div class="container-fluid footerColor"><div class="tilt-container footerColor"><div class="tilt-row pb-4"><p class="bodyBold text-center">Supported by:</p></div></div></div>
    <?php endif; ?>    
  <div class="tilt-container footerColor">
      <div class="tilt-row">
          <div class="container-fluid footerColor">
              <div class="row p-0">
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <?php if (is_active_sidebar('footer-1')) : ?>
                        <div>
                        <?php dynamic_sidebar('footer-1'); ?>
                        </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <?php if (is_active_sidebar('footer-2')) : ?>
                            <div>
                            <?php dynamic_sidebar('footer-2'); ?>
                            </div>
                        <?php endif; ?>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <?php if (is_active_sidebar('footer-3')) : ?>
                        <div>
                        <?php dynamic_sidebar('footer-3'); ?>
                        </div>
                    <?php endif; ?>
                  </div>
                  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                    <?php if (is_active_sidebar('footer-4')) : ?>
                        <div>
                        <?php dynamic_sidebar('footer-4'); ?>
                        </div>
                    <?php endif; ?>
                  </div>
              </div>
          </div>
      </div>
  </div>  

</footer>   

<div class="container-fluid footerColor">
    <!-- copyrite  -->
   <div class="tilt-container footerColor">
        <div class="tilt-row pb-5">
            <div class="col6Small col2Medium col2Lg col2Large" style="padding-left: 56px;">
                <p class="mobileCenter">
                    &copy; 2022 TiLT. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</div>
  
<!-- <div class="top-button position-fixed zi-1020">
  <a href="#to-top" class="btn btn-primary shadow"><i class="fas fa-chevron-up"></i></a>
</div> -->

</div><!-- #page -->

<?php wp_footer(); ?>



</div>
<!-- container fluid -->

<!-- <script id="CookieDeclaration" src="https://consent.cookiebot.com/2c36a50f-1148-4655-95c9-7285346be762/cd.js" type="text/javascript" async></script> -->
</body>

</html>