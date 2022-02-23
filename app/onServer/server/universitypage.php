<?php
/**
 * 
 * Template Name: UniversityPage
 * 
 */

get_header( 'whiteBlueHeader'); ?>



<?php $text = 'Higher level institutions have an increasingly diverse student body and fostering an inclusive enivornment can be a challenge.'; ?>
<?php $texttwo = 'Incidences of microaggressions, particularly around gender, race and ethnicity mean that campuses can be a less than welcoming place for many students.'; ?>

<?php echo do_shortcode('[showHeading title="Police Game" text="'.$text.'" texttwo="'.$texttwo.'" class="whiteBlue" ]'); ?>


<div class="tilt-container whiteBlue mb-10">
    <div class="tilt-row">
        <div class="col6Small col6Medium col6Lg col6Large">
            <img class="centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/universityPageHeader.svg'; ?>" alt="">
        </div>
    </div>
</div>


















<?php get_footer(); ?>