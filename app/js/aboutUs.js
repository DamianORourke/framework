

    function rotateDivAround(spanToRotate, divToRotate, divToNegativeRotate, divToShow){
        console.log(divToShow)
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
        
        return false;
    }

    jQuery(function ($) {

        $('.aboutCard-button').on('click', function(evt){
            let personSpan = $(this).attr('person-span');
            let personImg = $(this).attr('person-img');
            let personBio = $(this).attr('person-bio');
            let personRing = $(this).attr('person-ring');
    
            console.log(personSpan);
    
            rotateDivAround(personSpan, personRing, personImg, personBio);
    
        });
    
    
        $('#playGameHomePage').on('click', function(evt){
            evt.preventDefault();
            $('#homePageIframe').show();
            $('#playGameHomePageContainer').hide();
        });
        
        // $('#closeIframeHomepage').on('click', function(evt){
        //     evt.preventDefault();
        //     $('#homePageIframe').hide();
        //     $('#playGameHomePageContainer').show();
        // });
    
        $('#playGameTopOfHomePage').on('click', function(){
    
            if($('#homePageIframe').is(':visible')){
                console.log('it is');
                $('html, body').animate({
                    scrollTop: $('#topOfPlayGame').offset().top
                }, 1000 );
            }else{
                $('html, body').animate({
                    scrollTop: $('#playGameHomePageContainer').offset().top
                }, 1000, function(){
                    $('#topOfPlayGame').trigger('click');
                });
            }
    
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
    
    
    });