<?php
/**
 * 
 * Template Name: PolicePage
 * 
 */

get_header( 'whiteYellowHeader' ); ?>


<?php $text = '<p class="text-center">A role-play training game for police organisations to address individual and organisational unconscious biases.</p>'; ?>
<?php echo do_shortcode('[showHeading title="Police Game" class="whiteYellow" ]'.$text.'[/showHeading]'); ?>


<div class="tilt-container whiteYellow">
    <div class="tilt-row">
        <div class="col6Small col6Medium col6Lg col6Large">
            <img class="centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/policeHeader.png'; ?>" alt="">
        </div>
    </div>
</div>

<?php 

$texttwo = '<p class="text-center">Police organisations are diverse and officers of different genders, races and ethnicities must work together in cohesive units. They must also work effectively in diverse societies.</p>'; 

?>

<div class="tilt-container footerColor">
    <div class="tilt-row">
        <?php echo do_shortcode('[showHeading title="Why TiLT&apos;s Police Game?" top="my-7" class="footerColor" ]'.$texttwo.'[/showHeading]'); ?>
    </div>
</div>




















<?php get_footer(); ?>