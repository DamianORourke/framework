<?php
/**
 * 
 * Template Name: UniversityPage
 * 
 */

get_header( 'whiteBlueHeader'); ?>



<?php $text = '<p class="text-center">A role-play training game for higher education institutions to address individual and organisational unconscious bias.</p>'; ?>


<?php echo do_shortcode('[showHeading title="University Game" class="whiteBlue" ]'.$text.'[/showHeading]'); ?>


<div class="tilt-container whiteBlue">
    <div class="tilt-row">
        <div class="col6Small col6Medium col6Lg col6Large">
            <img class="centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/universityPageHeader.svg'; ?>" alt="">
        </div>
    </div>
</div>

<?php 

$texttwo = '<p class="text-center">Higher level institutions have an increasingly <strong>diverse student body</strong> and fostering an <strong>inclusive enivornment</strong> can be a challenge. </p><p class="text-center"> Incidences of <strong>microaggressions</strong>, particularly around gender, race and ethnicity mean that campuses can be a less than welcoming place for many students.</p>'; 

?>

<div class="tilt-container footerColor">
    <div class="tilt-row">
        <?php echo do_shortcode('[showHeading title="Why TiLT&apos;s University Game?" class="footerColor" ]'.$texttwo.'[/showHeading]'); ?>
    </div>
</div>













<?php get_footer(); ?>