<?php
/**
 * 
 * Template Name: PolicePage
 * 
 */

get_header( 'whiteYellowHeader' ); ?>


<?php $text = 'A role-play training game for police organisations to address individual and organisational unconscious biases.'; ?>
<?php echo do_shortcode('[showHeading title="Police Game" text="'.$text.'" class="whiteYellow" ]'); ?>


<div class="tilt-container whiteYellow mb-10">
    <div class="tilt-row">
        <div class="col6Small col6Medium col6Lg col6Large">
            <img class="centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/policeHeader.svg'; ?>" alt="">
        </div>
    </div>
</div>


















<?php get_footer(); ?>