<?php
/**
 * 
 * Template Name: UniversityPage
 * 
 */

get_header(); ?>



<!-- university game header  -->
            <!-- text and title  -->
            <div class="container-fluid whiteBlue">
                <div class="tilt-container whiteBlue">
                    <div class="tilt-row spacer fiftySix whiteBlue"></div>
                    <div class="tilt-row">
                    <?php $text = '<p>A role-play training game for higher education institutions to address individual and organisational unconscious bias.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="University Game" class="whiteBlue" ]'.$text.'[/showHeading]'); ?>
                    </div>
                    <div class="tilt-row spacer fiftySix whiteBlue"></div>
                </div>
            </div>
            <!-- // text and title  -->
            <!-- image  -->
            <div class="container-fluid whiteBlue">
                <div class="tilt-container whiteBlue">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6Lg col6Large">
                            <img class="centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/universityPageHeader.png'; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- // image  -->
<!-- // university game header  -->

<!-- why tilts game  -->
            <!-- header and text  -->
            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor">
                    <div class="tilt-row spacer fiftySix"></div>
                    <div class="tilt-row">
                    <?php $texttwo = '<p>Higher level institutions have an increasingly <strong>diverse student body</strong> and fostering an <strong>inclusive enivornment</strong> can be a challenge. </p><p> Incidences of <strong>microaggressions</strong>, particularly around gender, race and ethnicity mean that campuses can be a less than welcoming place for many students.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="Why TiLT&apos;s University Game?" class="footerColor" ]'.$texttwo.'[/showHeading]'); ?>
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
                    <?php $textthree = '<p>The game is set in a <strong>Generic University</strong> (GU) student hall of residence. Players role-play first as <strong>Anu</strong>, a female student from India, and then as <strong>Mike</strong>, a male student born in Ireland with Nigerian heritage.</p>';?>
                        <?php echo do_shortcode('[showHeading title="The Game" class="whitePurple" ]'.$textthree.'[/showHeading]'); ?>
                    </div>
                    <div class="tilt-row spacer fiftySix"></div>
                </div>
            </div>
            <!-- // header and text  -->
            <!-- image graphic -->
            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple">
                    <img class="centerImage imageFluid" src="<?php echo get_stylesheet_directory_uri().'/images/theGameUniversityPage.png'; ?>" alt="">
                </div>
            </div>
            <!-- // image graphic  -->
            <!-- spacer eighty  -->
            <div class="container-fluid whitePurple">
                <div class="tilt-row spacer eighty whitePurple"></div>
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
                        <img class="centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/rolePlayRHS_universityPage.png'; ?>" alt="">
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
                                <li>Experience situations from a different perspective.</li>
                                <li>Gain knowledge and understanding of different identities.</li>
                                <li>Gain knowledge of what happens around those identities in the organisational setting.</li>
                            </ul>
                        </div>
                        <div class="col6Small col6Medium col3Lg col3Large d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                            <img class="mt-5 ps-5 centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/rolePlayRHS_universityPage.png'; ?>" alt="">
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


            <!-- desktop research driven  -->
            <div class="container-fluid footerColor">
                <!-- tilt container  -->
                <div class="tilt-container footerColor">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col3Lg col3Large ps-2 pe-2 ps-sm-0 ps-md-0">
                            <img class="mt-sm-0 mt-md-0 mt-lg-5 mt-xl-5 mt-xxl-5 pe-sm-0 pe-md-0 pe-lg-5 pe-xl-5 pe-xxl-5 centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/videoCall_universitiesPage.png'; ?>" alt="">
                        </div>
                        <div class="col6Small col6Medium col3Lg col3Large ps-2 pe-2 ps-sm-0 ps-md-0">
                            <h3 class="boldH3 my-3">Research-driven</h3>
                            <p class="my-3 bodyBold">The curriculum and storylines in the University Game are developed from:</p>
                            <ul class="homePageList ps-3">
                                <li>State-of-the-art practice in higher education.</li>
                                <li>Social Science research on the topics and issues surrounding gender, race and ethnicity. </li>
                                <li>Experiential data: analysis of 560 survey responses and 30 in-depth interviews with students in 2021.</li>
                            </ul>
                        </div>
                    </div>
                        <!-- tilt row  -->
                </div>
                <!-- tilt container  -->
            </div>

            <!-- spacer eighty  -->
            <div class="container-fluid footerColor">
                <div class="tilt-row spacer eighty"></div>
            </div>
            <!-- spacer eighty -->

<!-- // role play  -->



<!-- measurable performance -->
            <!-- spacer eighty  -->
            <div class="container-fluid whiteYellow">
                <div class="tilt-row spacer eighty whiteYellow"></div>
            </div>
            <!-- spacer eighty -->
            <!-- measurable performance top text  -->
            <div class="container-fluid whiteYellow">
                <div class="tilt-container whiteYellow">
                    <div class="tilt-row">
                        <?php $textthree = '<p>Students’ awareness surrounding issues on race and gender are <strong>assessed</strong> before and after playing the game. This offers students <strong>feedback</strong> on how the game influenced their <strong>understanding</strong> of these issues.</p><p>The <strong>anonymised</strong> results of students’ understanding can be accessed by university administrators via a <strong>customised dashboard</strong>. This communicates <strong>opportunities for improvement</strong> within the organisation.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="Measurable Performance" class="whiteYellow" ]'.$textthree.'[/showHeading]'); ?>
                    </div>
                </div>
            </div>
            <!-- measurable performance top text  -->
            <!-- measurable performance image  -->
            <div class="container-fluid whiteYellow">
                <div class="tilt-container whiteYellow">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6Lg col6Large">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/measurablePerformance.png'; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- spacer eighty  -->
            <div class="container-fluid whiteYellow">
                <div class="tilt-row spacer eighty whiteYellow"></div>
            </div>
            <!-- spacer eighty -->
<!-- // measurable performance  -->


<!-- play the game  -->
            <!-- spacer eighty  -->
            <div class="container-fluid footerColor">
                <div class="tilt-row spacer eighty footerColor"></div>
            </div>
            <!-- spacer eighty -->
            <!-- play the game top text  -->

            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor">
                    <div class="tilt-row">
                    <?php $textthree = '<p>TiLT’s University Game is currently being trialled in Trinity College Dublin and we are interested in trialling the game with other higher-level Institutions.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="Play the Game" class="footerColor" ]'.$textthree.'[/showHeading]'); ?>
                    </div>
                </div>
            </div>
            <!-- // play the game top text -->

            <!-- spacer eighty  -->
            <div class="container-fluid footerColor">
                <div class="tilt-row spacer sixteen footerColor"></div>
            </div>
            <!-- spacer eighty -->
            <!-- play the game image  -->
            <div class="container-fluid footerColor">
                <div class="tilt-container footerColor">
                    <div class="tilt-row">
                        <div class="col6Small col6Medium col6Lg col6Large">
                            <div class="textOverImage">
                                <img class="centerImage img-fluid centerImage img-fluid d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block" src="<?php echo get_stylesheet_directory_uri().'/images/playGame.png'; ?>" alt="">
                                <img src="<?php echo get_stylesheet_directory_uri().'/images/gameImageMobile.png'; ?>" style="width: 100%; height: auto;" class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none px-2">
                                <div class="bottomText container p-0">
                                    <button style="display: block !important; margin: 0 auto;" class="btn btn-outline-secondary" id="getStarted">
                                        <svg class="controller" width="24" height="24" viewBox="0 0 28 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M23.1249 15.0611L22.5265 10.4001C22.4853 10.1359 22.4546 9.86172 22.427 9.59757C22.4151 9.49997 22.4046 9.40373 22.3944 9.30613C22.1784 7.42154 20.5991 6 18.7213 6C17.8743 6 17.046 6.2984 16.3908 6.83855C15.8953 7.24671 15.2899 7.47123 14.6899 7.47123H14.4548C13.8547 7.47123 13.251 7.24668 12.7554 6.83855C12.0987 6.2984 11.2704 6 10.4234 6C8.54566 6 6.96806 7.42143 6.75206 9.30613L6.72107 9.58911C6.692 9.85652 6.66279 10.1328 6.61815 10.4088L6.02149 15.0628C5.92553 15.8103 6.15363 16.563 6.65079 17.1272C7.13785 17.6811 7.83907 18 8.57305 18C9.47331 18 10.3205 17.5129 10.7818 16.7293L12.2326 14.2687C12.4179 13.9548 12.7539 13.7611 13.114 13.7611H16.0327C16.3911 13.7611 16.729 13.9566 16.9141 14.2687L18.3615 16.7276C18.8243 17.5131 19.6715 18 20.5735 18C21.3075 18 22.0087 17.6811 22.4958 17.1272C22.9929 16.563 23.221 15.8103 23.1251 15.0609L23.1249 15.0611ZM10.2176 10.6265C9.47513 10.6265 8.87138 10.0179 8.87138 9.26845C8.87138 8.51905 9.47499 7.91038 10.2176 7.91038C10.9584 7.91038 11.5619 8.51905 11.5619 9.26845C11.5619 10.0179 10.9584 10.6265 10.2176 10.6265ZM18.9305 10.6265C18.188 10.6265 17.5843 10.0179 17.5843 9.26845C17.5843 8.51905 18.1879 7.91038 18.9305 7.91038C19.6713 7.91038 20.2748 8.51905 20.2748 9.26845C20.2748 10.0179 19.6713 10.6265 18.9305 10.6265Z"/>
                                        </svg>Play Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- // play the game image  -->

            <!-- spacer eighty  -->
            <div class="container-fluid footerColor">
                <div class="tilt-row spacer eighty footerColor"></div>
            </div>
            <!-- spacer eighty -->

<!-- // play the game  -->

<!-- become a trial partner  -->
            <!-- header and text  -->
            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple">
                    <div class="tilt-row spacer fiftySix"></div>
                    <div class="tilt-row">
                        <?php $textfive = '<p>We are developing TiLT in conjunction with Trial Partners from across the world. If your organisation is interested in trialling the University Game, please enter your details and we will get in touch.</p>'; ?>
                        <?php echo do_shortcode('[showHeading title="Become a Trial Partner" top="mb-7" class="whitePurple" ]'.$textfive.'[/showHeading]'); ?>
                    </div>
                    <div class="tilt-row spacer fiftySix"></div>
                </div>
            </div>
            <!-- // header and text  -->
            <!-- contact form  -->
            <div class="container-fluid whitePurple">
                <div class="tilt-container whitePurple"><?php echo do_shortcode('[contact-form-7 id="273" html_class="tilt-row"]'); ?> </div>
            </div>
            <!-- // contact form  -->

<!-- become a trial partner  -->






<?php get_footer(); ?>