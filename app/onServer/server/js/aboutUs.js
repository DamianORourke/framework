

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

