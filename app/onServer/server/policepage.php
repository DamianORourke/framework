<?php
/**
 * 
 * Template Name: PolicePage
 * 
 */

get_header( 'whiteYellowHeader' ); ?>

<div class="container-fluid whiteYellow">
    <?php $text = '<p class="text-center">A role-play training game for police organisations to address individual and organisational unconscious biases.</p>'; ?>
    
    <div class="tilt-container whiteYellow">
        <div class="tilt-row">
            <?php echo do_shortcode('[showHeading title="Police Game" class="whiteYellow" ]'.$text.'[/showHeading]'); ?>
        </div>
    </div>
</div>
<!-- whiteYellow  -->
<div class="container-fluid whiteYellow">
    <div class="tilt-container whiteYellow">
        <div class="tilt-row">
            <div class="col6Small col6Medium col6Lg col6Large">
                <img class="centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/policeHeader.png'; ?>" alt="">
            </div>
        </div>
    </div>
</div>
<!-- white yellow  -->

<div class="container-fluid footerColor">
    <?php 
    $texttwo = '<p class="text-center">Police organisations are diverse and officers of different genders, races and ethnicities must work together in cohesive units. They must also work effectively in diverse societies.</p>'; 
    ?>

    <div class="tilt-container footerColor">
        <div class="tilt-row">
            <?php echo do_shortcode('[showHeading title="Why TiLT&apos;s Police Game?" top="my-7" class="footerColor" ]'.$texttwo.'[/showHeading]'); ?>
        </div>
    </div>
</div>
<!-- footerColor  -->

<div class="container-fluid whitePurple">
    <?php
    $textthree = '<p class="text-center">Through playing the Police Game, officers gain knowledge and awareness of their own biases and how to mitigate them in everyday interactions both within the organisational context, and outside of it. Our initial police games include:</p>';
    ?>
    <div class="tilt-container whitePurple">
        <div class="tilt-row">
            <?php echo do_shortcode('[showHeading title="The Game" top="my-7" class="whitePurple" ]'.$textthree.'[/showHeading]'); ?>
        </div>
    </div>
</div>
<div class="container-fluid whitePurple">
    <div class="tilt-container whitePurple">
        <div class="tilt-row">
            <div class="col6Small col3Medium col3Lg col3Large ps-4">
                <h2>The United States Police Game</h2>
                <p class="mb-3">A game set in a Generic Police Department in the United States. This focuses on <strong>internal relations</strong> among personnel.</p>
                <p class="mb-3">Players gain knowledge and awareness on how to interact with colleagues.</p>
            </div>
            <div class="col6Small col3Medium col3Lg col3Large">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/usPoliceGameSolid.png';?>" alt="">
            </div>
        </div>
    </div>
    <div class="tilt-container whitePurple">
        <div class="tilt-row">
            <div class="col6Small col3Medium col3Lg col3Large">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/europeanSolid.png';?>" alt="">
            </div>
            <div class="col6Small col3Medium col3Lg col3Large ps-1 pe-4">
                <h2>The European Police Game</h2>
                <p class="mb-3">A game set in a European police service. This focuses on interactions between the police and <strong>members of the community</strong> in a multi-cultural society.</p>
                <p class="mb-3">Players gain knowledge and awareness about how to interact with members of the public.</p>
            </div>
        </div>
    </div>
    <div class="spacer py-3 tilt-container whitePurple"></div>
</div>
<div class="container-fluid footerColor">
    <div class="spacer pt-8 pb-8 tilt-container footerColor"></div>
        <div class="tilt-container footerColor">
            <div class="tilt-row">
                <div class="col6Small col3Medium col3Lg col3Large ps-2">
                    <h3 class="boldH3 my-3">Role-Play</h3>
                    <p class="my-3 bodyBold">By role-playing as characters who differ in some way from the players’ real world identity, players:</p>
                    <ul class="homePageList ps-3">
                        <li>Experience situations involving bias from multiple perspectives.</li>
                        <li>Gain knowledge and awareness of what happens around different identities in the organisational setting.</li>
                        <li>Develop understanding of how individual and organisational decisions impact people in the workplace.</li>
                    </ul>
                </div>
                <div class="col6Small col3Medium col3Lg col3Large">
                    <img src="<?php echo get_stylesheet_directory_uri().'/images/policeRolePlay.png';?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- white purple  -->


    
<div class="container-fluid footerColor">    
    <div class="tilt-container footerColor">
        <div class="tilt-row">
            <div class="col6Small col3Medium col3Lg col3Large">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/policeResearch.png';?>" alt="">
            </div>
            <div class="col6Small col3Medium col3Lg col3Large ps-2">
            <h3 class="boldH3 my-3">Research-driveny</h3>
                <p class="my-3 bodyBold">The curriculum and storylines in the Police Game are developed from:</p>
                <ul class="homePageList ps-3">
                    <li>State-of-the-art practice in police training.</li>
                    <li>Social Science research on the topics and issues surrounding gender, race and ethnicity. </li>
                    <li>Experiential data: analysis of 700 survey responses and 40 in-depth interviews with students in 2021.</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="spacer tilt-container pt-3 pb-5 footerColor"></div>
</div>
<!-- footerColor  -->

<div class="container-fluid whiteBlue">
<div class="spacer tilt-container pt-3 pb-8 whiteBlue"></div>
    <?php
    $textfour = '<p class="text-center">Officers’ awareness surrounding issues on race and gender are assessed before and after playing the game. This offers officers <strong>feedback</strong> on how the game influenced their <strong>understanding</strong> of these issues.</p><p class="text-center">The <strong>anonymised</strong> results of officers’ understanding can be accessed by university administrators via a <strong>customised dashboard</strong>. This communicates opportunities for improvement within the <strong>organisation</strong>.</p>';
    ?>

    <div class="tilt-container whiteBlue">
        <div class="tilt-row">
            <?php echo do_shortcode('[showHeading title="Measurable Performance" top="my-0" class="whiteBlue" ]'.$textfour.'[/showHeading]'); ?>
        </div>
    </div>
</div>
<!-- whiteBlue  -->
<div class="container-fluid whiteBlue">
    <div class="tilt-container whiteBlue">
        <div class="tilt-row">
        <img src="<?php echo get_stylesheet_directory_uri().'/images/measurablePerformance.png';?>" alt="">
        </div>
    </div>
    <div class="spacer tilt-container pb-9 whiteBlue"></div>
</div>
<!-- whiteBlue  -->

<div class="container-fluid footerColor">
    <div class="spacer tilt-container pt-3 pb-8 footerColor"></div>
    <?php
    $textfive = '<p class="text-center">We are developing TiLT in conjunction with Trial Partners from across the world. If your organisation is interested in trialling the University Game, please enter your details and we will get in touch.</p>';
    ?>
    <div class="tilt-container footerColor">
        <div class="tilt-row">
            <?php echo do_shortcode('[showHeading title="Become a Trial Partner" top="my-0" class="footerColor" ]'.$textfive.'[/showHeading]'); ?>
        </div>
    </div>
</div>
<div class="container-fluid footerColor">
    <div class="tilt-container footerColor"><?php echo do_shortcode('[contact-form-7 id="264" html_class="tilt-row"]'); ?> </div>
</div>
<!-- footerColor  -->




















<?php get_footer(); ?>