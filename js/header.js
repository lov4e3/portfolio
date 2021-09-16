$(function () {

    /* header menu - animation */
    $('.smenu').css({
        display: 'none'
    });

    $('.lnbWrap>ul>li').hover(function () {
        $(this).children('.smenu').stop().slideDown();
    }, function () {
        $(this).children('.smenu').stop().slideUp();
    });

    /* hambuger-menu */
    var no = 1;
    $('.hambuger-menu').click(function () {
        $('.mobile-menu').stop().slideToggle(600);

        if(no===1){
            $(this).find('a').show(0);

            $(this).find('span').hide(0);

            no = 0;
        }else if(no===0){
            $(this).find('a').hide(0);

            $(this).find('span').show(0);

            no = 1;
        }

    });


    $('.hambuger-menu').find('a').click(function(e){
        e.preventDefault();
    });

})
