$(function () {
    
    //notice click event
    $('.page a:first').addClass('on');
    $('.page a').click(function(e){
        e.preventDefault();
        
        $(this).addClass('on').siblings().removeClass('on');
    });
    
    
    
    
    
    
    
    var opa = $('.staff-box');
    var boxTop = opa.offset().top;
    console.log(boxTop);

    //staff event
    $(window).scroll(function () {
        //var scTop = $('html,body').scrollTop();
        var scTop = $(this).scrollTop();
        console.log(scTop);

        if (scTop > 90) {

            opa.find('.txt-title').animate({
                top: '50%',
                opacity: 1
            }, 600);
            opa.find('.hire').delay(300).animate({
                top: 0,
                opacity: 1
            }, 600);
            opa.find('.call').delay(600).animate({
                bottom: 0,
                opacity: 1
            }, 600);

        }


    });

});
