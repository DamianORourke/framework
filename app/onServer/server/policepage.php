<?php
/**
 * 
 * Template Name: PolicePage
 * 
 */

get_header(); ?>

<!-- whiteYellow  -->
<!-- police page header  -->
            <?php echo do_shortcode('[showSpacer class="eighty whiteYellow"][/showSpacer]'); ?>
            
            <!-- title and text  -->
            <?php $text = '<p style="text-align: center;">A role-play training game for police organisations to address individual and organisational unconscious biases.</p>'; ?>
            <?php echo do_shortcode('[showHeading title="Police Game" top="mb-7" class="whiteYellow" ]'.$text.'[/showHeading]'); ?>

            <!-- // title and text  -->
            <!-- image  -->
            <div class="container-fluid whiteYellow">
                <div class="tilt-container whiteYellow">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6Lg col6Large">
                            <!-- desktop image  -->
                            <img class="centerImage img-fluid centerImage img-fluid d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block" src="<?php echo get_stylesheet_directory_uri().'/images/policeHeader.png'; ?>" alt="">
                            <!-- mobile image  -->
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/policeHeaderMobileImage.png'; ?>" style="width: 100%; height: auto;" class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none px-2">
                        </div>
                    </div>
                </div>
            </div>
            <!-- // image  -->
<!-- // police page header -->

<!-- footerColor  -->
<!-- why tilts game  -->
            <!-- header and text  -->

            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
            <?php $texttwo = '<p>Police organisations are diverse and officers of different genders, races and ethnicities must work together in cohesive units. They must also work effectively in diverse societies.</p>'; ?>
            <?php echo do_shortcode('[showHeading title="Why TiLT&apos;s Police Game?" top="my-7" class="footerColor" ]'.$texttwo.'[/showHeading]'); ?>
            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
            
            <!-- // header and text  -->

<!-- // why tilts game  -->

<!-- whitePurple  -->
<!-- the game  -->
            <!-- header and text  -->

            <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>
            <?php $textthree = '<p>Through playing the Police Game, officers gain knowledge and awareness of their own biases and how to mitigate them in everyday interactions both within the organisational context, and outside of it. Our initial police games include:</p>';?>
            <?php echo do_shortcode('[showHeading title="The Game" top="my-7" class="whitePurple" ]'.$textthree.'[/showHeading]'); ?>
            <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>

            <!-- // header and text  -->

            <!-- hidden desktop police game  -->
            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6lg col6Large pb-sm-5 pb-md-5 pb-lg-0 pb-xl-0 pb-xxl-0">
                            <img class="centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/usPoliceGameSolid.png';?>" alt="">
                        </div>
                    </div>
                    <!-- tilt row -->
                </div>
                <!-- tilt container  -->
            </div>
            <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>
            </div>
            <!-- end hidden desktop police game -->

            <!-- police game desktop first section -->
            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col3Lg col3Large">

                        <h2>Initial Police Games</h2>
                        <p class="bodyBold">We are currently developing 2 Police Games:</p>
                        <ul class="homePageList ps-3">
                            <li>A game set in a Generic Police Department in the United States. This focuses on <strong>internal relations</strong> among personnel. </li>
                            <li>A game set in a European police service. This focuses on interactions <strong>between the police and members of the community</strong> in a multi-cultural society.</li>
                        </ul>
                    </div>
                    <div class="col6Small col6Medium col3Lg col3Large d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                        <img class="float-right" src="<?php echo get_stylesheet_directory_uri().'/images/usPoliceGameSolid.png';?>" alt="">
                        </div>
                    </div>
                    <!-- tilt row  -->
                </div>
                <!-- tilt container  -->
            </div>
                
            <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>

<!-- // the game  -->

<!-- footerColor  -->
<!-- role play  -->
            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>

            <!-- hidden desktop role play  -->
            <div class="container-fluid footerColor d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                <div class="tilt-container footerColor">
                    <!-- tilt row  -->
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6lg col6Large pb-sm-5 pb-md-5 pb-lg-0 pb-xl-0 pb-xxl-0">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/rolePlayPolice.png';?>" alt="">
                        </div>
                    </div>
                    <!-- tilt row  -->
                </div>
                <!-- tilt container  -->
                <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
            </div>
            <!-- end hidden desktop role play  -->

            <!-- role play desktop first section -->
            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col3Lg col3Large">
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
                <div class="tilt-row spacer fiftySix footerColor"></div>
            </div>
            <!-- spacer  132 -->
            

            <!-- hidden desktop research driven play  -->

            <div class="container-fluid footerColor d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
                <div class="tilt-container footerColor">
                    <!-- tilt row  -->
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6lg col6Large pb-sm-5 pb-md-5 pb-lg-0 pb-xl-0 pb-xxl-0">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/researchPolice.png';?>" alt="">
                        </div>
                    </div>
                    <!-- tilt row  -->
                </div>
                <!-- tilt container  -->
                <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
            </div>
            <!-- end hidden desktop role play  -->

            <!-- research driven  -->
            <div class="container-fluid footerColor">    
                <div class="tilt-container footerColor">
                    <div class="tilt-row">
                        <div class="col6Small col3Medium col3Lg col3Large d-none d-lg-block d-xl-block d-xxl-block">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/researchPolice.png';?>" alt="">
                        </div>
                        <div class="col6Small col3Medium col3Lg col3Large">
                        <h3 class="boldH3 my-3">Research-driven</h3>
                            <p class="my-3 bodyBold">The curriculum and storylines in the Police Game are developed from:</p>
                            <ul class="homePageList ps-3">
                                <li>Social science knowledge on gender, race, and ethnicity in policing.</li>
                                <li>In-depth interviews with police officers and civilian staff from diverse demographic backgrounds.</li>
                                <li>State-of-the-art practice in police training.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // research driven  -->
            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
<!-- // role play  -->

<!-- whiteBlue  -->
<!-- measurable performance  -->
            <!-- measurable performance top text  -->
            <?php echo do_shortcode('[showSpacer class="fiftySix whiteBlue"][/showSpacer]'); ?>
            <?php $textfour = '<p style="text-align: center;">Officers’ awareness surrounding issues on race and gender are <strong>assessed</strong> before and after playing the game. This offers officers <strong>feedback</strong> on how the game influenced their <strong>understanding</strong> of these issues.</p><p style="text-align: center;">The <strong>anonymised</strong> results of officers’ understanding can be accessed by Police administrators via a <strong>customised dashboard</strong>. This communicates opportunities for improvement within the <strong>organisation</strong>.</p>';?>
            <?php echo do_shortcode('[showHeading title="Measurable Performance" top="mb-7" class="whiteBlue" ]'.$textfour.'[/showHeading]'); ?>
            
            <?php echo do_shortcode('[showSpacer class="twentyFour whiteBlue"][/showSpacer]'); ?>
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
            
            <?php echo do_shortcode('[showSpacer class="fiftySix whiteBlue"][/showSpacer]'); ?>
<!-- // measurable performance  -->

<!-- footerColor  -->
<!-- become a trial partner  -->
            <!-- header and text  -->
            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
            
            <?php $textfive = '<p style="text-align: center;">These role-play games are currently being developed in conjunction with police trial partners including Seattle Police Department and An Garda Síochána, the Irish police department.</p>'; ?>
            <?php echo do_shortcode('[showHeading title="Become a Trial Partner" class="footerColor" ]'.$textfive.'[/showHeading]'); ?>
            
            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
            <!-- // header and text  -->
            <!-- contact form  -->
            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor"><?php echo do_shortcode('[contact-form-7 id="355" html_class="tilt-row"]'); ?> </div>
            </div>
            <!-- // contact form  -->

            <!-- // contact form  -->
            <?php $btnSrc = get_stylesheet_directory_uri().'/images/upArrow.png'; ?>
            <?php $content = '<div style="position: relative;"><button id="goToTop" class="btn btn-upButton p-0"><img src="'.$btnSrc.'" alt="An image of an arrow pointing upward, when clicked navigates user to the top of the webpage"></button></div>';?>
            <?php echo do_shortcode('[showSpacer class="eighty footerColor"]'.$content.'[/showSpacer]'); ?>


<!-- become a trial partner  -->



<?php get_footer(); ?>