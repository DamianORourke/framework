<?php

function doShowOurPartners(){
    $trinity = get_stylesheet_directory_uri().'/images/trinityCollegeLogo.png';
    $seattle = get_stylesheet_directory_uri().'/images/spdLogo.png';
    $garda = get_stylesheet_directory_uri().'/images/gardaLogo.png';
    $str = <<<TRIALPARTNER
    <div class="tilt-container ourPartners">
        <div class="tilt-row py-4">
            <div class="col6Small col6Medium col1Lg col1Large">
                <p class="ps-2 ps-lg-0 mobileCenter large my-5 my-smy-5 my-md-5 my-lg-0 my-xl-0 my-xxl-0">Our trial partners are:</p>
            </div>
            <div class="col6Small col6Medium col2Lg col2Large">
                <img class="img-fluid desktopRight my-5 my-smy-5 my-md-5 my-lg-0 my-xl-0 my-xxl-0" src="{$trinity}" alt="">
            </div>
            <div class="col6Small col6Medium col1Lg col1Large">
                <img class="img-fluid" style="display: block; margin-left: auto; margin-right: auto;" src="{$seattle}" alt="">
            </div>
            <div class="col6Small col6Medium col2Lg col2Large">
                <img style="display: block;" class="img-fluid ms-auto me-auto mt-5 mb-4 mb-sm-4 mb-md-4 mb-lg-5 mb-xl-5 mb-xxl-5 mt-lg-0 mt-xl-0 mt-xxl-0" src="{$garda}" alt="">
            </div>
        </div>
    </div>
TRIALPARTNER;

return $str;

}

function doShowHeading( $atts = array(), $content = null){
    $class = $title = $text = $texttwo = $top = '';
    extract(shortcode_atts(
        array(
            'class' => 'whitePurple',
            'title' => 'titleValue',
            'top' => 'mt-4 mb-4 mb-sm-4 mt-sm-4 mb-md-4 mt-md-10 mb-lg-4 mt-lg-10 mt-xl-10 mt-xxl-10'
        ), $atts
        ));


    $str = <<<HEADING
<div class="container-fluid {$class}">
    <div class="tilt-container {$class}">
        <div class="tilt-row">
            <div class="col6Small col6Medium col6Lg col6Large">
                <h1 class="text-center">
                    {$title}
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- // title  -->
<!-- paragraph -->
<div class="container-fluid {$class}">
    <div class="tilt-container {$class}">
        <div class="tilt-row">
            <div class="col6Small col6Medium col6Lg col6Large">
                <div class="pageHeading">
                    {$content}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- // paragraph -->

HEADING;

return $str;

}

function doShowSpacer( $atts = array(), $content = null ){
    $class = '';
    extract(shortcode_atts(
        array(
            'class' => 'whitePurple'
        ), $atts
        ));

    $str = <<<SPACER
<!-- spacer {$class}  -->
<div class="container-fluid {$class}">
    <div class="tilt-container">
        <div class="tilt-row spacer {$class}">{$content}</div>
    </div>
</div>
<!-- // spacer {$class}  -->
SPACER;

    return $str;
}


?>