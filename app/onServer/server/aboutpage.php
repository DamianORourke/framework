<?php
/**
 * 
 * Template Name: AboutPage
 * 
 */

get_header() ?>


<!-- footerColor -->
<!-- about page header  -->

        <?php echo do_shortcode('[showSpacer class="eighty footerColor"][/showSpacer]'); ?>
        
        <!-- title and text  -->
        <?php $text = '<p style="text-align: center;">We are a diverse team of academics, designers and developers, working together to produce unconscious bias training that creates lasting change.</p>'; ?>
        <?php echo do_shortcode('[showHeading title="Meet the Team" class="footerColor" ]'.$text.'[/showHeading]'); ?>
        <!-- // title and text  -->

        <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>

<!-- // about page header  -->

<!-- about page main content   -->
<div class="container-fluid footerColor">
    <div class="tilt-container footerColor">
        <div class="tilt-row">
            <div class="col6Small col3Medium col2Lg col2Large footerColor">
                <div class="aboutCard mb-10 mb-sm-10 mb-md-10 mb-lg-10 mb-xl-10 mb-xxl-10">
                    <div class="aboutCardTop" title="View Bio" person-span=".anneSpan" person-ring=".anneRing" person-img=".anneHerself" person-bio="#anne_Bio">
                        <div class="rotateDiv anneRing">
                            <div class="innerDiv anneHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Dr. Anne Holohan</h1>
                        <p class="aboutCard-subtitle">
                            Scientific Lead
                       </p>
                       <h4 class="aboutCard-button" person-span=".anneSpan" person-ring=".anneRing" person-img=".anneHerself" person-bio="#anne_Bio">
                            View Bio 
                            <span>
                                <svg class="anneSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="anne_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Dr. Holohan’s research is in organisational and institutional change, gender and gamification. She was PI and Co-ordinator of Gaming for Peace (www.gap-project.eu).
                        </p>
                    </div>
                </div>
            </div>
            <div class="col6Small col3Medium col2Lg col2Large footerColor pb-sm-10 pb-md-10 pb-lg-0 pb-xl-0 pb-xxl-0">
                <div class="aboutCard mb-10 mb-sm-10 mb-md-10 mb-lg-10 mb-xl-10 mb-xxl-10">
                    <div class="aboutCardTop" title="View Bio" person-span=".conorSpan" person-ring=".conorRing" person-img=".conorHerself" person-bio="#conor_Bio">
                        <div class="rotateDiv conorRing">
                            <div class="innerDiv conorHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Conor McNally</h1>
                        <p class="aboutCard-subtitle">
                            Commercial Lead
                       </p>
                        <h4 class="aboutCard-button" person-span=".conorSpan" person-ring=".conorRing" person-img=".conorHerself" person-bio="#conor_Bio">
                            View Bio 
                            <span>
                                <svg class="conorSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="conor_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Conor is the business and start-up development manager at the ADAPT Centre. He has been working in entrepeneurial, commercial and management roles for 20+ years.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col6Small col3Medium col2Lg col2Large footerColor pb-sm-10 pb-md-10 pb-lg-0 pb-xl-0 pb-xxl-0">
                <div class="aboutCard mb-10 mb-sm-10 mb-md-10 mb-lg-10 mb-xl-10 mb-xxl-10">
                    <div class="aboutCardTop" title="View Bio" person-span=".penelopeSpan" person-ring=".penelopeRing" person-img=".penelopeHerself" person-bio="#penelope_Bio">
                        <div class="rotateDiv penelopeRing">
                            <div class="innerDiv penelopeHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Dr. Penelope Muteteli</h1>
                        <p class="aboutCard-subtitle">
                            Curriculum Researcher
                       </p>
                        <h4 class="aboutCard-button" person-span=".penelopeSpan" person-ring=".penelopeRing" person-img=".penelopeHerself" person-bio="#penelope_Bio">
                            View Bio 
                            <span>
                                <svg class="penelopeSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="penelope_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Dr. Muteteli is an Adjunct Assistant Professor and research fellow. Her research interests are in areas of statelessness, migration, and conflict studies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col6Small col3Medium col2Lg col2Large footerColor pb-sm-10 pb-md-10 pb-lg-0 pb-xl-0 pb-xxl-0">
                <div class="aboutCard mb-10 mb-sm-10 mb-md-10 mb-lg-10 mb-xl-10 mb-xxl-10">
                    <div class="aboutCardTop" title="View Bio" person-span=".sineadSpan" person-ring=".sineadRing" person-img=".sineadHerself" person-bio="#sinead_Bio">
                        <div class="rotateDiv sineadRing">
                            <div class="innerDiv sineadHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Dr. Sinéad Walsh</h1>
                        <p class="aboutCard-subtitle">
                            Curriculum Researcher
                       </p>
                        <h4 class="aboutCard-button" person-span=".sineadSpan" person-ring=".sineadRing" person-img=".sineadHerself" person-bio="#sinead_Bio">
                            View Bio 
                            <span>
                                <svg class="sineadSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="sinead_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Dr. Walsh’s interests are in gender, culture and social change. Her teaching experience includes modules on feminism, multiculturalism and diaspora.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col6Small col3Medium col2Lg col2Large footerColor pb-sm-10 pb-md-10 pb-lg-0 pb-xl-0 pb-xxl-0">
                <div class="aboutCard mb-10 mb-sm-10 mb-md-10 mb-lg-10 mb-xl-10 mb-xxl-10">
                    <div class="aboutCardTop" title="View Bio" person-span=".celineSpan" person-ring=".celineRing" person-img=".celineHerself" person-bio="#celine_Bio">
                        <div class="rotateDiv celineRing">
                            <div class="innerDiv celineHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Celine Harding</h1>
                        <p class="aboutCard-subtitle">
                            UX/ UI Designer
                       </p>
                        <h4 class="aboutCard-button" person-span=".celineSpan" person-ring=".celineRing" person-img=".celineHerself" person-bio="#celine_Bio">
                            View Bio 
                            <span>
                                <svg class="celineSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="celine_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Celine’s background is in User Experience Design and digital marketing, with experience in inclusive design and gamification.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col6Small col3Medium col2Lg col2Large footerColor pb-sm-10 pb-md-10 pb-lg-0 pb-xl-0 pb-xxl-0">
                <div class="aboutCard mb-10 mb-sm-10 mb-md-10 mb-lg-10 mb-xl-10 mb-xxl-10">
                    <div class="aboutCardTop" title="View Bio" person-span=".damianSpan" person-ring=".damianRing" person-img=".damianHerself" person-bio="#damian_Bio">
                        <div class="rotateDiv damianRing">
                            <div class="innerDiv damianHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Damian O’Rourke</h1>
                        <p class="aboutCard-subtitle">
                            Full-stack Developer
                       </p>
                        <h4 class="aboutCard-button" person-span=".damianSpan" person-ring=".damianRing" person-img=".damianHerself" person-bio="#damian_Bio">
                            View Bio 
                            <span>
                                <svg class="damianSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="damian_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Damian’s background is in software development, with a particular interest in frontend development, rest API's and vanilla javascript. Eat, Sleep, Code, Repeat!
                        </p>
                    </div>
                </div>
            </div>

            <div class="col6Small col3Medium col2Lg col2Large footerColor">
                <div class="aboutCard mb-10 mb-sm-10 mb-md-10 mb-lg-10 mb-xl-10 mb-xxl-10">
                    <div class="aboutCardTop" title="View Bio" person-span=".lileSpan" person-ring=".lileRing" person-img=".lileHerself" person-bio="#lile_Bio">
                        <div class="rotateDiv lileRing">
                            <div class="innerDiv lileHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Lile Donohue</h1>
                        <p class="aboutCard-subtitle">
                            Assistant Researcher
                       </p>
                        <h4 class="aboutCard-button" person-span=".lileSpan" person-ring=".lileRing" person-img=".lileHerself" person-bio="#lile_Bio">
                            View Bio 
                            <span>
                                <svg class="lileSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="lile_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Lile is a recent graduate of Politics and Sociology at TCD. She is passionate about social issues, especially concerning the rights of asylum seekers and refugees.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col6Small col3Medium col2Lg col2Large footerColor pb-sm-10 pb-md-10 pb-lg-0 pb-xl-0 pb-xxl-0">
                <div class="aboutCard mb-8 mb-sm-8 mb-md-8 mb-lg-8 mb-xl-8 mb-xxl-8">
                    <div class="aboutCardTop" title="View Bio" person-span=".zixuanliSpan" person-ring=".zixuanliRing" person-img=".zixuanliHerself" person-bio="#zixuanli_Bio">
                        <div class="rotateDiv zixuanliRing">
                            <div class="innerDiv zixuanliHerself"></div>
                        </div>
                    </div>
                        <div class="aboutCardBody">
                            <h3 class="aboutCard-heading">Zixuan Li</h1>
                        <p class="aboutCard-subtitle">
                            Visual Designer
                       </p>
                        <h4 class="aboutCard-button" person-span=".zixuanliSpan" person-ring=".zixuanliRing" person-img=".zixuanliHerself" person-bio="#zixuanli_Bio">
                            View Bio 
                            <span>
                                <svg class="zixuanliSpan" width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.0898438 10.59L4.66984 6L0.0898438 1.41L1.49984 0L7.49984 6L1.49984 12L0.0898438 10.59Z" fill="#5E59A8"/>
                                </svg>
                            </span>
                        </h4>
                    </div>
                    <div style="display: none;" id="zixuanli_Bio" class="cardFooter ps-1 pe-1">
                        <p class="bioItself">
                            Zixuan is an art and design professional with a BA focused in animation, interactive technology, video graphics and special effects from Sichuan Fine Arts Institute.
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- // tilt-row -->
    </div>
    <!-- // tilt-container  -->
</div>
<!-- // about page main content  -->
<?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>

<div class="container-fluid ourPartners">
    <?php echo do_shortcode('[showOurPartners][/showOurPartners];'); ?>
</div>

 <!-- footerColor -->
<!-- become a trial partner  -->

<?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>
        
        <!-- title and text  -->
        <?php $text = '<p style="text-align: center;">We are developing TiLT in conjunction with Trial Partners from across the world.  If you are interested in becoming a Trial Partner, please enter your details and we will get in touch.</p>'; ?>
        <?php echo do_shortcode('[showHeading title="Become a Trial Partner" class="footerColor" ]'.$text.'[/showHeading]'); ?>
        <!-- // title and text  -->

        <?php echo do_shortcode('[showSpacer class="fiftySix footerColor"][/showSpacer]'); ?>

<!-- // become a trial partner  -->

<div class="container-fluid footerColor">
    <?php echo do_shortcode('<div class="tilt-container footerColor">[contact-form-7 id="264" html_class="tilt-row"]</div>');?>
</div>












<?php get_footer() ?>