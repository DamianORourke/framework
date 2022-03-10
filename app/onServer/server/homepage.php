<?php
/**
 * 
 * Template Name: HomePage
 * 
 */

get_header(); ?>


<!-- **************************************************************
    
    Content

*******************************************************************
-->



    <div class="container-fluid whitePurple p-0">

        <div class="tilt-container headerImageFrame">
            <?php echo do_shortcode('[showSpacer class="one-three-two whitePurple"][/showSpacer]'); ?>
            <div class="tilt-row">
                <div class="col6Small col3Medium col3Lg col3Large">
                    <h1>Unconscious Bias <br>Training to Improve <br>Diversity & Inclusion</h1>
                </div>
            </div>

            <?php echo do_shortcode('[showSpacer class="fiftySix bg-transparent"][/showSpacer]'); ?>

            <div class="tilt-row">
                <div class="col6Small col3Medium col3Lg col3Large">
                    <h2 class="homePage">Research-driven role-play games that address individual and organisational biases, with measurable learning and impact.</h2>
                </div>
            </div>

            <?php echo do_shortcode('[showSpacer class="fiftySix bg-transparent"][/showSpacer]'); ?>

            <div class="tilt-row d-none d-sm-none d-md-block d-lg-block d-md-block d-xl-block d-xxl-block">
                <div class="col6Small col6Medium col6Lg col6Large">
                    <?php $url = site_url( '/contact/', 'https' ); ?>
                    <button role="button" id="becomeATrialPartner" aria-label='Link to Become a Trial Partner Form' aria-describedby="trialPartnerDesc" class="btn btn-primary mr-7 mr-md-4 mr-lg-3 mr-xl-7 mr-xxl-7 ms-md-3 ms-lg-0 ps-sm-2 ps-lg-2"><a href="<?php echo $url; ?>" >Become a trial partner</a></button>
                    <p aria-hidden="false" id="trialPartnerDesc" style="display: none;">A button that routes the user to the contact page of the website to express interest in becoming a Trial Partner</p>
                    <button id="playGameTopOfHomePage" aria-describedby="playGameDesc" class="btn btn-outline-secondary d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
                        <svg class="controller" width="24" height="24" viewBox="0 0 28 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.1249 15.0611L22.5265 10.4001C22.4853 10.1359 22.4546 9.86172 22.427 9.59757C22.4151 9.49997 22.4046 9.40373 22.3944 9.30613C22.1784 7.42154 20.5991 6 18.7213 6C17.8743 6 17.046 6.2984 16.3908 6.83855C15.8953 7.24671 15.2899 7.47123 14.6899 7.47123H14.4548C13.8547 7.47123 13.251 7.24668 12.7554 6.83855C12.0987 6.2984 11.2704 6 10.4234 6C8.54566 6 6.96806 7.42143 6.75206 9.30613L6.72107 9.58911C6.692 9.85652 6.66279 10.1328 6.61815 10.4088L6.02149 15.0628C5.92553 15.8103 6.15363 16.563 6.65079 17.1272C7.13785 17.6811 7.83907 18 8.57305 18C9.47331 18 10.3205 17.5129 10.7818 16.7293L12.2326 14.2687C12.4179 13.9548 12.7539 13.7611 13.114 13.7611H16.0327C16.3911 13.7611 16.729 13.9566 16.9141 14.2687L18.3615 16.7276C18.8243 17.5131 19.6715 18 20.5735 18C21.3075 18 22.0087 17.6811 22.4958 17.1272C22.9929 16.563 23.221 15.8103 23.1251 15.0609L23.1249 15.0611ZM10.2176 10.6265C9.47513 10.6265 8.87138 10.0179 8.87138 9.26845C8.87138 8.51905 9.47499 7.91038 10.2176 7.91038C10.9584 7.91038 11.5619 8.51905 11.5619 9.26845C11.5619 10.0179 10.9584 10.6265 10.2176 10.6265ZM18.9305 10.6265C18.188 10.6265 17.5843 10.0179 17.5843 9.26845C17.5843 8.51905 18.1879 7.91038 18.9305 7.91038C19.6713 7.91038 20.2748 8.51905 20.2748 9.26845C20.2748 10.0179 19.6713 10.6265 18.9305 10.6265Z"/>
                        </svg>Play game
                    </button>
                    <p aria-hidden="false" id="playGameDesc" style="display: none;">A button that routes the user to the play game and opens the play game window automatically.</p>
                </div>
            </div>
            <div class="buttonToDisplay d-block d-md-block d-lg-none d-xl-none d-xxl-none">
                <div class="tilt-row">
                    <div class="col6Small">
                        <button  role="button" aria-label='Link to Become a Trial Partner Form' longtext="A button that routes the user to the contact page of the website to express interest in becoming a Trial Partner" class="btn btn-primary"><a href="<?php echo $url; ?> ">Become a trial partner</a></button>
                    </div>
                </div>
            </div>
            
            <?php echo do_shortcode('[showSpacer class="eighty whitePurple"][/showSpacer]'); ?>

        </div>
        <!-- tilt container  -->
    </div>
    <!-- container-fluid  -->

    <!-- hidden on desktop -->
    <div class="container-fluid whitePurple d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none">
        <div class="row">
            <div class="col-xs-12">
                <img class="ps-3" style="display: block; width: 100%; height: auto;" src="<?php echo get_stylesheet_directory_uri().'/images/fourthTime.png'; ?>" alt="Image Graphic">
            </div>
        </div>
    </div>
    <!-- hidden on desktop  -->


    <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>

    <div class="container-fluid footerColor">
        <!-- why choose TiLt  -->
        <div class="tilt-container footerColor">
            <div class="tilt-row">
                <div class="col6Small col6Medium col6Lg col6Large">
                    <!-- top spacing  -->
                    <h1 class="text-center">Why choose TiLT?</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- // title text  -->
    <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>

    <!-- hidden mobile icons  -->
    <div class="container-fluid footerColor">
        <div class="tilt-container footerColor d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
            <div id="iconsArea" class="tilt-row">
                <div class="col6Small col2Medium col2Lg col2Large ps-2">
                    <img class="img-fluid me-lg-0 me-xl-2 me-xxl-2" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/rolePlay.png'; ?>" alt="An icon representing Role play"> 
                    <h2>Role-play works</h2>
                    <p class="my-4">
                        Learners build lasting empathy and awareness of the experiences of  people who are different from themselves.
                    </p>
                </div>
                <div class="col6Small col2Medium col2Lg col2Large ps-2">
                    <img class="img-fluid me-lg-0 me-xl-2 me-xxl-2" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/learnByDoing.png'; ?>" alt="An icon representing Learn by Doing"> 
                    <h2>Learn by Doing</h2>
                    <p class="my-4">
                        As adults, we retain 10% of what we read and 20% of what we hear. When we learn by doing, we retain 90%.
                    </p>
                </div>
                <div class="col6Small col2Medium col2Lg col2Large ps-2">
                    <img class="img-fluid me-lg-0 me-xl-2 me-xxl-2" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/lastingChange.png'; ?>" alt="An icon representing Lasting Change"> 
                    <h2>Lasting change</h2>
                    <p class="my-4">
                        TiLT focuses on individual and organisational unconscious biases to achieve lasting transformation.
                    </p>
                </div>
            </div>
            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
            <!-- tilt row  -->
            <div id="iconsArea" class="tilt-row">
                <div class="col6Small col2Medium col2Lg col2Large ps-2">
                    <img class="img-fluid me-lg-0 me-xl-2 me-xxl-2" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/benefits.png'; ?>" alt="An icon representing Measurable Benefits"> 
                    <h2>Measurable <br> benefits</h2>
                    <p class="my-4">
                        Individuals receive awareness scores and progression feedback. Organisations receive progression tracking and insights for change.
                    </p>
                </div>
                <div class="col6Small col2Medium col2Lg col2Large ps-2">
                    <img class="img-fluid me-lg-0 me-xl-2 me-xxl-2" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/cost.png'; ?>" alt="An icon representing Cost Effective"> 
                    <h2>Cost-effective</h2>
                    <p class="my-4">
                        Digital role-play is a cost-effective way to provide impactful training to everyone in the organisation.
                    </p>
                </div>
                <div class="col6Small col2Medium col2Lg col2Large ps-2">
                    <img class="img-fluid me-lg-0 me-xl-2 me-xxl-2" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/safe.png'; ?>" alt="An icon representing Safe Exploration"> 
                    <h2>Safe exploration</h2>
                    <p class="my-4">
                        Sensitive topics can be explored in a safe way through taking the perspective of different characters.
                    </p>
                </div>
            </div>
            <!-- tilt row  -->
            <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
        </div>
        <!-- tilt container  -->
    </div>
    <!-- // hidden mobile icons  -->

    <!-- hidden desktop icons  -->
    <div class="container-fluid footerColor">
        <div class="tilt-container footerColor d-block d-lg-none d-xl-none d-xxl-none">
            <!-- tilt row  -->
            <div class="tilt-row">

                <div class="col6Small col3Medium col3Lg col3Large iconsMobile px-2">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/rolePlayMobile.png'; ?>" alt="An icon representing Role Play"> 
                    <h2>Role-play works</h2>
                    <p class="my-4">
                        Learners build lasting empathy and awareness of the experiences of  people who are different from themselves.
                    </p>
                </div>
                <div class="col6Small col3Medium col3Lg col3Large iconsMobile px-2">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/lastingChangeMobile.png'; ?>" alt="An icon representing Lasting Change"> 
                    <h2>Lasting change</h2>
                    <p class="my-4">
                        TiLT focuses on individual and organisational unconscious biases to achieve lasting transformation.
                    </p>
                </div>
                <div class="col6Small col3Medium col3Lg col3Large iconsMobile px-2">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/learnByDoingMobile.png'; ?>" alt="An icon representing Learn by Doing"> 
                    <h2>Learn by Doing</h2>
                    <p class="my-4">
                        As adults, we retain 10% of what we read and 20% of what we hear. When we learn by doing, we retain 90%.
                    </p>
                </div>
                <div class="col6Small col3Medium col3Lg col3Large iconsMobile px-2">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/benefitsMobile.png'; ?>" alt="An icon representing Measurable Benefits"> 
                    <h2>Measurable benefits</h2>
                    <p class="my-4">
                        Individuals receive awareness scores and progression feedback. Organisations receive progression tracking and insights for change.
                    </p>
                </div>
                <div class="col6Small col3Medium col3Lg col3Large iconsMobile ps-2">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/costMobile.png'; ?>" alt="An icon representing Cost effective"> 
                    <h2>Cost-effective</h2>
                    <p class="my-4">
                        Digital role-play is a cost-effective way to provide impactful training to everyone in the organisation.
                    </p>
                </div>
                <div class="col6Small col3Medium col3Lg col3Large iconsMobile ps-2">
                    <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/imageIcons/safeMobile.png'; ?>" alt="An icon representing Safe Exploration"> 
                    <h2>Safe exploration</h2>
                    <p class="my-4">
                        Sensitive topics can be explored in a safe way through taking the perspective of different characters.
                    </p>
                </div>
            </div>
            <!-- tilt row  -->
        </div>
        <!-- tilt container  -->
    </div>
    <!-- container-fluid footer color why choose tilt -->

    <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>

    <div class="container-fluid whitePurple">
        <!-- what we do  -->
        <?php $text = '<p style="text-align: center;">We develop research-driven curricula around unconscious and organisational biases, embedding learning objectives into digital role-play games with assessment and measurement.</p>'; ?>
        <?php echo do_shortcode('[showHeading title="What We Do" class="whitePurple" ]'.$text.'[/showHeading]'); ?>
    </div>
        <!-- // title and text  -->

    <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>

    <!-- hidden desktop what we do image -->
    <div class="container-fluid whitePurple d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
        <div class="tilt-container whitePurple">
            <!-- tilt row  -->
            <div class="tilt-row">
                <div class="col6Small col6Medium col6lg col6Large">
                    <img class="centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/videoCall.png'; ?>" alt="A graphic to describe our interview process">
                </div>
            </div>
            <!-- tilt row  -->
        </div>
        <!-- tilt container  -->
        <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>
    </div>
    <!-- end hidden desktop what we do  -->

    <!-- part 01 -->
    <div class="container-fluid whitePurple">
        <div class="tilt-container whitePurple">
            <div class="tilt-row">
                <div class="col6Small col6Medium col3Lg col3Large ps-2">
                    <h2 class="homePage my-3">01.</h2>
                    <p class="my-3 bodyBold">We develop curricula and storylines that address the needs of the respective organisation through:</p>
                    <ul class="homePageList ps-3">
                        <li>Experiential data gathered through surveys and in-depth interviews.</li>
                        <li>Social science research in the areas of gender, sexuality, race and ethnicity.</li>
                        <li>State-of-the-art training in these areas in different sectors and across the world.</li>
                    </ul>
                </div>
                <div class="col6Small col6Medium col3Lg col3Large d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                    <img class="mt-5 ps-5 centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/videoCall.png'; ?>" alt="A graphic to describe our interview process">
                </div>
            </div>
            <!-- tilt row  -->
        </div>
        <!-- tilt container  -->
    </div>
    <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>

    <!-- part 02  -->
    <div class="container-fluid whitePurple">
        <!-- tilt container  -->
        <div class="tilt-container whitePurple">
            <div class="tilt-row">
                <div class="col6Small col6Medium col3Lg col3Large ps-2 pe-2 ps-sm-0 ps-md-0">
                    <img class="mt-sm-0 mt-md-0 mt-lg-5 mt-xl-5 mt-xxl-5 pe-sm-0 pe-md-0 pe-lg-5 pe-xl-5 pe-xxl-5 centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/gameImage.png'; ?>" alt="A graphic of our in game screen">
                </div>
                <div class="col6Small col6Medium col3Lg col3Large ps-2 pe-2 ps-sm-0 ps-md-0">
                    <h2 class="homePage my-3">02.</h2>
                    <p class="my-3 bodyBold">We embed each curriculum into a digital role-play training game.</p>
                    <ul class="homePageList ps-3">
                        <li>The characters and events in the game are fictional, but are reflective of authentic scenarios that can occur in the organisation.</li>
                        <li>The decision-tree structure of the game is designed to be representative of the decisions individuals can make.</li>
                        <li>Each decision in the game is scored and given qualitative feedback.</li>
                    </ul>
                </div>
            </div>
                <!-- tilt row  -->
        </div>
        <!-- tilt container  -->
    </div>

    <!-- hidden on desktop top image  -->
    <div class="container-fluid whitePurple d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
        <div class="tilt-container whitePurple">
            <div class="tilt-row">
                <div class="col6Small col6Medium col6Lg col6Large ps-2 pe-2 ps-sm-0">
                    <img class="centerImage img-fluid" src="<?php echo get_stylesheet_directory_uri().'/images/Dashboard.png'; ?>" alt="A graphic of a proposed game dashboard">
                </div>
            </div>
        </div>
    </div>
    <!-- end hidden on desktop top image  -->

    <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>

    <!-- part 03.  -->
    <div class="container-fluid whitePurple">
        <div class="tilt-container whitePurple">
            <div class="tilt-row">
                <div class="col6Small col6Medium col3Lg col3Large ps-2 pe-2 ps-sm-0 ps-md-0">
                    <h2 class="homePage my-3">03.</h2>
                    <p class="my-3 bodyBold">We track and measure progress.</p>
                    <ul class="homePageList ps-3">
                        <li>Individual learners get a score before and after the game, indicating the progress they made through playing the game.</li>
                        <li>Organisations get a summary dashboard illustrating cumulative and anonymised progression of the awareness levels within the organisation.</li>
                        <li>Organisations longitudinally track customised metrics to monitor the impact of TiLT training.</li>
                    </ul>
                </div>
                <div class="col6Small col3Medium col3Lg col3Large d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
                    <img class="mt-5 ps-sm-0 ps-md-0 ps-lg-5 ps-xl-5 ps-xxl-5 img-fluid centerImage" src="<?php echo get_stylesheet_directory_uri().'/images/Dashboard.png'; ?>" alt="A graphic of a proposed game dashboard">
                </div>
            </div>
            <!-- tilt row  -->
        </div>
        <!-- tilt container  -->
    </div>
    <!-- // part 03  -->

    <?php echo do_shortcode('[showSpacer class="fiftySix whitePurple"][/showSpacer]'); ?>

    <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
    <div id="topOfPlayGame" class="container-fluid footerColor">
        <!-- play the game  -->
        <div class="tilt-container footerColor">
            <div class="tilt-row">
                <div class="container-fluid">
                    <h1 class="text-center pb-2">
                        Play Game
                    </h1>
                    <p class="text-center px-2">
                        Play the TiLT University Game, developed for our trial partner Trinity College Dublin. Role-play as Anu and Mike as they navigate their first year at university.
                    </p>
                </div>
            </div>
            <!-- tilt row  -->
        </div>
        <!-- tilt container  -->
        <?php echo do_shortcode('[showSpacer class="twentyFour footerColor"][/showSpacer]'); ?>

        <div id="playGameHomePageContainer" class="tilt-container footerColor">
            <div class="tilt-row">
                <div class="container-fluid">
                    <div class="textOverImage">
                        <img src="<?php echo get_stylesheet_directory_uri().'/images/playGame.png'; ?>" alt="A graphic of our game landing page" class="centerImage img-fluid d-none d-sm-none d-md-block d-lg-block d-xl-block d-xxl-block">
                        <img src="<?php echo get_stylesheet_directory_uri().'/images/gameImageMobile.png'; ?>" alt="A graphic of our game landing page" style="width: 100%; height: auto;" class="d-block d-sm-block d-md-none d-lg-none d-xl-none d-xxl-none px-2">
                        <div class="bottomText container p-0">
                            <button role="button" aria-label='Play Game' aria-controls="homePageIframe" aria-haspopup='true' aria-expanded="false" style="display: block !important; margin: 0 auto;" class="btn btn-outline-secondary" id="playGameHomePage">
                                <svg alt="An icon representing play game" class="controller" width="24" height="24" viewBox="0 0 28 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.1249 15.0611L22.5265 10.4001C22.4853 10.1359 22.4546 9.86172 22.427 9.59757C22.4151 9.49997 22.4046 9.40373 22.3944 9.30613C22.1784 7.42154 20.5991 6 18.7213 6C17.8743 6 17.046 6.2984 16.3908 6.83855C15.8953 7.24671 15.2899 7.47123 14.6899 7.47123H14.4548C13.8547 7.47123 13.251 7.24668 12.7554 6.83855C12.0987 6.2984 11.2704 6 10.4234 6C8.54566 6 6.96806 7.42143 6.75206 9.30613L6.72107 9.58911C6.692 9.85652 6.66279 10.1328 6.61815 10.4088L6.02149 15.0628C5.92553 15.8103 6.15363 16.563 6.65079 17.1272C7.13785 17.6811 7.83907 18 8.57305 18C9.47331 18 10.3205 17.5129 10.7818 16.7293L12.2326 14.2687C12.4179 13.9548 12.7539 13.7611 13.114 13.7611H16.0327C16.3911 13.7611 16.729 13.9566 16.9141 14.2687L18.3615 16.7276C18.8243 17.5131 19.6715 18 20.5735 18C21.3075 18 22.0087 17.6811 22.4958 17.1272C22.9929 16.563 23.221 15.8103 23.1251 15.0609L23.1249 15.0611ZM10.2176 10.6265C9.47513 10.6265 8.87138 10.0179 8.87138 9.26845C8.87138 8.51905 9.47499 7.91038 10.2176 7.91038C10.9584 7.91038 11.5619 8.51905 11.5619 9.26845C11.5619 10.0179 10.9584 10.6265 10.2176 10.6265ZM18.9305 10.6265C18.188 10.6265 17.5843 10.0179 17.5843 9.26845C17.5843 8.51905 18.1879 7.91038 18.9305 7.91038C19.6713 7.91038 20.2748 8.51905 20.2748 9.26845C20.2748 10.0179 19.6713 10.6265 18.9305 10.6265Z"/>
                                </svg>Play Game
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <!-- tilt row  -->
        </div>
        <!-- tilt-container  -->
    </div>
    <!-- top of play game  -->

    <div id="homePageIframe" style="display: none;" class="container-fluid footerColor">
        <div class="tilt-row">
            <!-- <nav id="bootscore-navbar" class="navbar navbar-expand-xs bg-transparent">
                <div class="container-fluid">
                    <button id="closeIframeHomepage" class="btn btn-outline-secondary ms-auto" type="button">
                        Close Game
                    </button>
                </div>
            </nav> -->
        </div>
        <div class="tilt-row pb-10">
            <div class="iframe-container pb-10">
                <iframe src="<?php echo get_stylesheet_directory_uri().'/game/version17.html'; ?>" frameborder="0" scrolling="no" class="tilt-container"></iframe>
            </div>
        </div>
    </div>

    <!-- // play the game image  -->
    <?php $btnSrc = get_stylesheet_directory_uri().'/images/upArrow.png'; ?>
    <?php $content = '<div style="position: relative;"><button role="button" aria-label="Go to top" id="goToTop" aria-controls="goToTopImage" class="btn btn-upButton p-0"><img src="'.$btnSrc.'" id="goToTopImage" alt="An image of an arrow pointing upward"></button></div>';?>
    <?php echo do_shortcode('[showSpacer class="eighty footerColor"]'.$content.'[/showSpacer]'); ?>

<!-- container-fluid play the game footerColor  -->

<!-- **************************************************************
    
     End Content

*******************************************************************
-->












<?php get_footer(); ?>