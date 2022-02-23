jQuery(function ($) {

    $('.aboutCard-button').on('click', function(evt){
        let personSpan = $(this).attr('person-span');
        let personImg = $(this).attr('person-img');
        let personBio = $(this).attr('person-bio');
        let personRing = $(this).attr('person-ring');

        console.log(personSpan);

        rotateDivAround(personSpan, personRing, personImg, personBio);

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