<?php

/**
 * 
 * Template Name: Contact Us
 * 
*/

get_header();
?>

<!-- whitePurple  -->
<!-- contact us header  -->

            <?php echo do_shortcode('[showSpacer class="eighty whitePurple"][/showSpacer]'); ?>
            
            <!-- title and text  -->
            <?php $text = '<p style="text-align: center;">We are developed TiLT in conjuction with Trial Partners from across the world. If you are interested in becoming a Trial Partner, please enter your details and we will get in touch.</p>'; ?>
            <?php echo do_shortcode('[showHeading title="Contact Us" class="whitePurple" ]'.$text.'[/showHeading]'); ?>
            <!-- // title and text  -->

            <!-- image  -->
            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6Lg col6Large">
                            <!-- desktop image  -->
                            <img class="centerImage img-fluid centerImage img-fluid d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block" src="<?php echo get_stylesheet_directory_uri().'/images/aboutUsWhitePurple.png'; ?>" alt="">
                            <!-- mobile image  -->
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/mobileUniversityTopImage.png'; ?>" style="width: 100%; height: auto;" class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none px-2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- // image  -->

<!-- // contact us header  -->
<?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
<div class="container-fluid footerColor">
    <div class="tilt-container"><?php echo do_shortcode('[contact-form-7 id="264" html_class="tilt-row"]'); ?> </div>
</div>

<div class="container-fluid ourPartners">
    <?php echo do_shortcode('[showOurPartners]'); ?>
</div>


<?php get_footer() ?>