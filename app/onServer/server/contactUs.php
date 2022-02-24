<?php

/**
 * 
 * Template Name: Contact Us
 * 
*/

get_header();
?>

<div class="container-fluid whitePurple">
    <?php $text = '<p class="text-center">We are developed TiLT in conjuction with Trial Partners from across the world. If you are interested in becoming a Trial Partner, please enter your details and we will get in touch.</p>'; ?>
    <?php echo do_shortcode('[showHeading title="Contact Us" class="whitePurple" ]'.$text.'[/showHeading]'); ?>
</div>

<div class="container-fluid whitePurple">
    <div class="tilt-container whitePurple mb-10">
        <div class="tilt-row">
            <div class="col6Small col6Medium col6Lg col6Large">
                <img class="centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/aboutUsWhitePurple.png'; ?>" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footerWhite">
    <div class="tilt-container"><?php echo do_shortcode('[contact-form-7 id="264" html_class="tilt-row"]'); ?> </div>
</div>

<div class="container-fluid ourPartners">
    <?php echo do_shortcode('[showOurPartners]'); ?>
</div>


<?php get_footer() ?>