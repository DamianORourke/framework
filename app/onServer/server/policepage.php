<?php
/**
 * 
 * Template Name: PolicePage
 * 
 */

get_header(); ?>

<!-- police page header  -->
            <div class="container-fluid whiteYellow">
                <!-- title and text  -->
                <div class="tilt-container whiteYellow">
                    <div class="tilt-row spacer fiftySix whiteYellow"></div>
                    <div class="tilt-row">
                        <?php $text = '<p class="text-center">A role-play training game for police organisations to address individual and organisational unconscious biases.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="Police Game" top="mb-7" class="whiteYellow" ]'.$text.'[/showHeading]'); ?>
                    </div>
                    <div class="tilt-row spacer fiftySix whiteYellow"></div>
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
<!-- // police page header -->

<!-- why tilts game  -->

            <!-- header and text  -->

            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor">
                    <div class="tilt-row spacer fiftySix"></div>
                    <div class="tilt-row">
                        <?php $texttwo = '<p class="text-center">Police organisations are diverse and officers of different genders, races and ethnicities must work together in cohesive units. They must also work effectively in diverse societies.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="Why TiLT&apos;s Police Game?" top="my-7" class="footerColor" ]'.$texttwo.'[/showHeading]'); ?>
                    </div>
                    <div class="tilt-row spacer fiftySix"></div>
                </div>
            </div>
            <!-- // header and text  -->

<!-- // why tilts game  -->

<!-- the game  -->
            <!-- header and text  -->

            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple">
                    <div class="tilt-row spacer fiftySix"></div>
                    <div class="tilt-row">
                        <?php $textthree = '<p class="text-center">Through playing the Police Game, officers gain knowledge and awareness of their own biases and how to mitigate them in everyday interactions both within the organisational context, and outside of it. Our initial police games include:</p>';?>
                        <?php echo do_shortcode('[showHeading title="The Game" top="my-7" class="whitePurple" ]'.$textthree.'[/showHeading]'); ?>
                    </div>
                    <div class="tilt-row spacer fiftySix"></div>
                </div>
            </div>

            <!-- // header and text  -->

            <!-- hidden desktop police game 
            <div class="tilt-container whitePurple d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                tilt row 
                <div class="tilt-row">
                    <div class="col6Small col6Medium col6lg col6Large pb-sm-5 pb-md-5 pb-lg-0 pb-xl-0 pb-xxl-0">
                        <img class="centerImage img-fluid" src="<?php // echo get_stylesheet_directory_uri().'/images/usPoliceGameSolid.png';?>" alt="">
                    </div>
                </div>
                tilt row
            </div>
            tilt container  -->
            <!-- end hidden desktop police game  -->

            <!-- police game desktop first section -->
            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple">
                    <div class="tilt-row">
                        <div class="col6Small col3Medium col3Lg col3Large ps-2">

                        <h2>Initial Police Games</h2>
                        <ul class="homePageList ps-3">
                            <li>A game set in a Generic Police Department in the United States. This focuses on <strong>internal relations</strong> among personnel. </li>
                            <li>A game set in a European police service. This focuses on interactions <strong>between the police and members of the community</strong> in a multi-cultural society.</li>
                        </ul>
                    </div>
                    <div class="col6Small col3Medium col3Lg col3Large d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                        <img class="float-right" src="<?php echo get_stylesheet_directory_uri().'/images/usPoliceGameSolid.png';?>" alt="">
                        </div>
                    </div>
                    <!-- tilt row  -->
                </div>
                <!-- tilt container  -->
            </div>
        
            <!-- spacer eighty  -->
            <div class="container-fluid whitePurple">
                <div class="tilt-row spacer one-three-two"></div>
            </div>
            <!-- spacer eighty -->

<!-- // the game  -->

<!-- role play  -->
            <!-- spacer eighty  -->
            <div class="container-fluid footerColor">
                <div class="tilt-row spacer eighty footerColor"></div>
            </div>
            <!-- spacer eighty -->

            <!-- hidden desktop role play  -->
            <div class="tilt-container footerColor d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                <!-- tilt row  -->
                <div class="tilt-row">
                    <div class="col6Small col6Medium col6lg col6Large pb-sm-5 pb-md-5 pb-lg-0 pb-xl-0 pb-xxl-0">
                        <img src="<?php echo get_stylesheet_directory_uri().'/images/rolePlayPolice.png';?>" alt="">
                    </div>
                </div>
                <!-- tilt row  -->
            </div>
            <!-- tilt container  -->
            <!-- end hidden desktop role play  -->

            <!-- role play desktop first section -->
            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col3Lg col3Large ps-2">
                            <h3 class="boldH3 my-3">Role-Play</h3>
                            <p class="my-3 bodyBold">By role-playing as characters who differ in some way from the players’ real world identity, players:</p>
                            <ul class="homePageList ps-3">
                                <li>Experience situations involving bias from multiple perspectives.</li>
                                <li>Gain knowledge and awareness of what happens around different identities in the organisational setting.</li>
                                <li>Develop understanding of how individual and organisational decisions impact people in the workplace.</li>
                            </ul>
                        </div>
                        <div class="col6Small col6Medium col3Lg col3Large d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                            <img class="mt-5 ps-5 centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/rolePlayPolice.png';?>" alt="">
                        </div>
                    </div>
                    <!-- tilt row  -->
                </div>
                <!-- tilt container  -->
            </div>

            <!-- spacer 132 -->
            <div class="container-fluid footerColor">
                <div class="tilt-row spacer one-three-two footerColor"></div>
            </div>
            <!-- spacer  132 -->
            

            <!-- hidden desktop role play  -->
            <div class="tilt-container footerColor d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                <!-- tilt row  -->
                <div class="tilt-row">
                    <div class="col6Small col6Medium col6lg col6Large pb-sm-5 pb-md-5 pb-lg-0 pb-xl-0 pb-xxl-0">
                        <img src="<?php echo get_stylesheet_directory_uri().'/images/researchPolice.png';?>" alt="">
                    </div>
                </div>
                <!-- tilt row  -->
            </div>
            <!-- tilt container  -->
            <!-- end hidden desktop role play  -->

            <!-- research driven  -->
            <div class="container-fluid footerColor">    
                <div class="tilt-container footerColor">
                    <div class="tilt-row">
                        <div class="col6Small col3Medium col3Lg col3Large">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/researchPolice.png';?>" alt="">
                        </div>
                        <div class="col6Small col3Medium col3Lg col3Large ps-2">
                        <h3 class="boldH3 my-3">Research-driven</h3>
                            <p class="my-3 bodyBold">The curriculum and storylines in the Police Game are developed from:</p>
                            <ul class="homePageList ps-3">
                                <li>State-of-the-art practice in police training.</li>
                                <li>Social Science research on the topics and issues surrounding gender, race and ethnicity. </li>
                                <li>Experiential data: analysis of 700 survey responses and 40 in-depth interviews with students in 2021.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- spacer eighty  -->
                <div class="container-fluid footerColor">
                    <div class="tilt-row spacer eighty"></div>
                </div>
                <!-- spacer eighty -->
            </div>
            <!-- // research driven  -->

<!-- // role play  -->


<!-- measurable performance  -->
            <!-- spacer eighty  -->
            <div class="container-fluid whiteBlue">
                <div class="tilt-row spacer eighty whiteBlue"></div>
            </div>
            <!-- spacer eighty -->
            <!-- measurable performance top text  -->
            <div class="container-fluid whiteBlue">
                <div class="tilt-container whiteBlue">
                    <div class="tilt-row">
                        <?php $textfour = '<p class="text-center">Officers’ awareness surrounding issues on race and gender are <strong>assessed</strong> before and after playing the game. This offers officers <strong>feedback</strong> on how the game influenced their <strong>understanding</strong> of these issues.</p><p class="text-center">The <strong>anonymised</strong> results of officers’ understanding can be accessed by university administrators via a <strong>customised dashboard</strong>. This communicates opportunities for improvement within the <strong>organisation</strong>.</p>';?>
                        <?php echo do_shortcode('[showHeading title="Measurable Performance" top="mb-7" class="whiteBlue" ]'.$textfour.'[/showHeading]'); ?>
                    </div>
                </div>
            </div>
             <!-- measurable performance top text  -->
            <!-- measurable performance image  -->
            <div class="container-fluid whiteBlue">
                <div class="tilt-container whiteBlue">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6Lg col6Large">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/measurablePerformance.png';?>" alt="">
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- spacer eighty  -->
            <div class="container-fluid whiteBlue">
                <div class="tilt-row spacer eighty whiteBlue"></div>
            </div>
            <!-- spacer eighty -->
<!-- // measurable performance  -->


<!-- become a trial partner  -->
            <!-- header and text  -->
            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor">
                    <div class="tilt-row spacer fiftySix"></div>
                    <div class="tilt-row">
                        <?php $textfive = '<p class="text-center">These role-play games are currently being developed in conjunction with police trial partners including Seattle Police Department and An Garda Síochána, the Irish police department.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="Become a Trial Partner" top="mb-7" class="footerColor" ]'.$textfive.'[/showHeading]'); ?>
                    </div>
                    <div class="tilt-row spacer fiftySix"></div>
                </div>
            </div>
            <!-- // header and text  -->
            <!-- contact form  -->
            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor"><?php echo do_shortcode('[contact-form-7 id="264" html_class="tilt-row"]'); ?> </div>
            </div>
            <!-- // contact form  -->

<!-- become a trial partner  -->



<?php get_footer(); ?>