$(document).ready(function () {

    /* PC버전 main slide */
    var click_slider = 0; //슬라이더클릭 광클 막기

    //마지막 li를 첫번째로 이동
    $('#mainList li:last').prependTo('#mainList');

    var imgW = $('#mainList li').width(); //li 하나의 width값

    //li 한칸의 크기만큼 margin-left적용
    $('#mainList').css('margin-left', -imgW);
    $('#mainList').css('left', 0);

    //다음버튼을 눌렀을 때
    $('.btnRight').click(function (e) {
        e.preventDefault();

        if (click_slider === 1) return false;
        click_slider = 1;

        $('#mainList').stop().animate({
            marginLeft: '-=' + imgW + 'px'
        }, 'slow', function () {
            $('#mainList li:first').appendTo('#mainList');
            $('#mainList').css('margin-left', -imgW);

            click_slider = 0;
        });
    });

    //이전버튼을 눌렀을 때
    $('.btnLeft').click(function (e) {
        e.preventDefault();

        if (click_slider === 1) return false;
        click_slider = 1;

        $('#mainList').stop().animate({
            marginLeft: '+=' + imgW + 'px'
        }, 'slow', function () {
            $('#mainList li:last').prependTo('#mainList');
            $('#mainList').css('margin-left', -imgW);

            click_slider = 0;
        });
    });



    /* 모바일버전 메인슬라이더 */
    $('#mainList li').eq(1).addClass('on');
    $('.bullet li').first().addClass('on');


    var mNum = 1;
    var bNum = 0;

    function MainSlider() {

        mNum++;
        bNum++;

        if (mNum === 3) mNum = 0;
        if (bNum === 3) bNum = 0;
        //console.log(mNum);

        $('#mainList li').eq(mNum).addClass('on').siblings().removeClass('on');

        $('.bullet li').eq(bNum).addClass('on').siblings().removeClass('on');

    } //MainSlider


    /* 슬라이드 자동실행 */
    var Auto = setInterval(function () {
        MainSlider();
    }, 4000);
    


    /* 마우스 오버/아웃시 슬라이드 자동 멈춤/실행 */
    
    $('#mainList, .bullet').mouseover(function () {
        clearInterval(Auto);

        //console.log("stop");
    }).mouseout(function () {
        Auto = setInterval(function () {
            MainSlider();
        }, 5000)

        //console.log("start");
    });



    /* 모바일버전 메인슬라이드 (불릿버튼 클릭) */
    /*$('.bullet li').click(function () {
        var idxBtn = $(this).index();
        //console.log(idxBtn+1);

        idxBtn += 1;
        //console.log(idxBtn);

        if (idxBtn === 3) idxBtn = 0;
        //console.log(idxBtn);

        $('#mainList li').eq(idxBtn).addClass('on').siblings().removeClass('on');

        $(this).addClass('on').siblings().removeClass('on');

    });

    */

    //var video = $('video').offset().top;
    var video = $('video').position().top;
    //alert(video);


    /*
    $('#mainList, .bullet').hover(function(){
        clearInterval(Auto);
        
        //console.log("STOP");
    },function(){
        setInterval(function(){
            MainSlider();
        }, 5000)
        
        //console.log("START");
    });
    */

    var mobileMenu = $('#menu .menuWrap li').height();

    if (mobileMenu === 360) {
        return false;
    } else {

        /* #menu 스크롤이벤트*/

        var MenuList = $('#menu h2, #menu li');

        //var MenuList02 = $('#menu li');
        var menuTop = $('#menu').offset().top;
        //console.log("#MENU top값: " + menuTop); //PC버전 - 1433, mobile버전 - 1590

        var menuLastImg = $('#menu li:last').offset().top; //2797
        //console.log(menuLastImg);


        var Menuh2 = $('#menu h2');
        var MenuLi = $('#menu li');
        var MenuLi01 = MenuLi.eq(0);
        var MenuLi02 = MenuLi.eq(1);
        var MenuLi03 = MenuLi.eq(2);
        var MenuLi04 = MenuLi.eq(3);


        var Moveh2 = Menuh2.outerHeight();
        var MoveTop = MenuLi.height();

        //console.log("h2의 height값: " + Moveh2);
        //console.log("li의 height값: " + MoveTop);


        $('#menu h2').addClass('on');
        $('#menu li').addClass('on');

        var plusTop = MoveTop + 50;

        $('#menu li').css({
            top: plusTop
        });

        if (menuTop > 1450) {
            $('#menu h2, #menu ul li').addClass('mobile');

            //console.log((menuTop == 1530));
        }

        var state = $('#menu h2, #menu ul li').hasClass('mobile');
        //console.log("결과값: "+sumit);
        //console.log((menuTop === 1530));

        if (state) {
            $('#menu h2, #menu ul li').removeClass('on');

            //console.log(state+"면 on클래스 삭제");
            Menuh2.css({
                opacity: 0,
                top: Moveh2
            });

            MenuLi01.css({
                opacity: 0,
                top: MoveTop
            });
            MenuLi02.css({
                opacity: 0,
                top: MoveTop * 2
            });
            MenuLi03.css({
                opacity: 0,
                top: MoveTop * 3
            });
            MenuLi04.css({
                opacity: 0,
                top: MoveTop * 4
            });
        }

        var classOn = $('#menu h2, #menu ul li').hasClass('on');
        //console.log("on 클래스가 "+ classOn + " 상태");

        const Gap = 783;
        const Gap2 = 227;
        const Gap3 = 531;
        const Gap4 = 105;


        //스크롤 이벤트 시작
        $(window).scroll(function () {

            //var scTop = $('html,body').scrollTop();
            var scTop = $(this).scrollTop();
            //console.log('마우스휠 값: ' + scTop);

            if (classOn) {


                if (scTop > menuTop - Gap && scTop < menuTop + Gap2) {
                    //스크롤이 > (1433-783) = 650
                    //스크롤이 < (1433+227) = 1660


                    Menuh2.stop().animate({
                        opacity: 1,
                        top: 0
                    }, 400, function () {

                        MenuLi01.animate({
                            opacity: 1,
                            top: 0
                        }, 400);

                        MenuLi02.delay(200).animate({
                            opacity: 1,
                            top: 0
                        }, 400);

                        MenuLi03.delay(400).animate({
                            opacity: 1,
                            top: 0
                        }, 400);

                        MenuLi04.delay(600).animate({
                            opacity: 1,
                            top: 0
                        }, 400);
                    });

                } else {
                    Menuh2.stop().animate({
                        opacity: 0,
                        top: Moveh2
                    }, 400);

                    MenuLi.stop().animate({
                        opacity: 0,
                        top: plusTop
                    }, 400);
                }
            } else {

                if (scTop > menuTop - Gap3 && scTop < menuLastImg - Gap4) {
                    // 1530 - 531 = 999
                    // 3097 - 105 = 2992

                    Menuh2.css({
                        opacity: 1,
                        top: 0
                    });

                    MenuLi.css({
                        opacity: 1,
                        top: 0
                    });


                } else {

                    Menuh2.css({
                        opacity: 0,
                        top: Moveh2
                    });


                    MenuLi01.css({
                        opacity: 0,
                        top: MoveTop
                    });
                    MenuLi02.css({
                        opacity: 0,
                        top: MoveTop * 2
                    });
                    MenuLi03.css({
                        opacity: 0,
                        top: MoveTop * 3
                    });
                    MenuLi04.css({
                        opacity: 0,
                        top: MoveTop * 4
                    });

                }


            }

        }); //scroll

    } //if else문 메뉴 높잇값 360이면 실행x

}); //jQuery
