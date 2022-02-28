jQuery(function ($) {

    $('.aboutCard-button').on('click', function(evt){
        let personSpan = $(this).attr('person-span');
        let personImg = $(this).attr('person-img');
        let personBio = $(this).attr('person-bio');
        let personRing = $(this).attr('person-ring');

        rotateDivAround(personSpan, personRing, personImg, personBio);

    });

    $('.aboutCardTop').on('click', function(evt){
        let personSpan = $(this).attr('person-span');
        let personImg = $(this).attr('person-img');
        let personBio = $(this).attr('person-bio');
        let personRing = $(this).attr('person-ring');

        console.log(personSpan);

        rotateDivAround(personSpan, personRing, personImg, personBio);

    });

    $('#goToTop').on('click', function(evt){
        evt.preventDefault();
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 1000 );
    });


    $('#playGameHomePage').on('click', function(evt){
        evt.preventDefault();
        $('#homePageIframe').show();
        $('#playGameHomePageContainer').hide();
    });
    
    $('#closeIframeHomepage').on('click', function(evt){
        evt.preventDefault();
        $('#homePageIframe').hide();
        $('#playGameHomePageContainer').show();
    });

    $('#playGameTopOfHomePage').on('click', function(){

        if($('#homePageIframe').is(':visible')){
            console.log('it is');
            $('html, body').animate({
                scrollTop: $('#homePageIframe').offset().top
            }, 1000 );
        }else{
            $('html, body').animate({
                scrollTop: $('#playGameHomePageContainer').offset().top
            }, 1000, function(){
                $('#playGameHomePage').trigger('click');
            });
        }

    });

    $('#playGameUniversity').on('click', function(evt){
        evt.preventDefault();
        $('#universityIframe').show();
        $('#playGameUniversityContainer').hide();
    });

    function rotateDivAround(spanToRotate, divToRotate, divToNegativeRotate, divToShow){
        console.log(divToShow);
        if($(spanToRotate).hasClass('rotateSpanTransition')){
            console.log('it does');
            $(spanToRotate).removeClass('rotateSpanTransition');
            $(spanToRotate).addClass('rotateNegativeSpanTransition');
            $(divToRotate).removeClass('rotateTransition');
            $(divToRotate).addClass('rotateNegativeSpanTransition');
            $(divToNegativeRotate).removeClass('rotateNegativeTransition');
            $(divToNegativeRotate).addClass('rotateNegativeSpanTransition');
        }else if($(spanToRotate).hasClass('rotateNegativeSpanTransition')){
            $(spanToRotate).removeClass('rotateNegativeSpanTransition');
            $(spanToRotate).addClass('rotateSpanTransition');
            $(divToRotate).removeClass('rotateNegativeSpanTransition');
            $(divToRotate).addClass('rotateSpanTransition');
            $(divToNegativeRotate).removeClass('rotateNegativeSpanTransition');
            $(divToNegativeRotate).addClass('rotateNegativeTransition');
        }else{
            $(spanToRotate).addClass('rotateSpanTransition');
            $(divToRotate).addClass('rotateTransition');
            $(divToNegativeRotate).addClass('rotateNegativeTransition');
        }

        $(divToShow).fadeToggle(800);
        return;
    };


    function isAMobile(){
        let isAMobile = navigator.userAgent.toLocaleLowerCase().match('/mobile/i');
        if(isAMobile){
            console.log('it is a mobile');
            return true;
        }else{
            console.log('it is not a mobile');
            return false;
        }
    }

});