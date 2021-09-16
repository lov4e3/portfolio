<?include("act/db.php");?>

<?
    $pn = str_replace('.php', '', end(explode("/", $_SERVER['SCRIPT_FILENAME'])));
    //print "<script>alert('$pn');</script>";

    $pname = current(explode("_", $pn));
?>

<!DOCTYPE php>
<php lang="ko">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title><?=$pn?> | Macho Chef</title>

        <link rel="shortcut icon" href="/image/favicon/favicon-pc.png">

        <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&family=Noto+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/<?=$pn?>.css">
        <link rel="stylesheet" href="/css/reset.css">
        <link rel="stylesheet" href="/css/header.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="stylesheet" href="/sub/css/menu_common.css">
        <link rel="stylesheet" href="/sub/css/category.css">
        <link rel="stylesheet" href="/sub/css/<?=$pn?>.css">

        <script src="/js/jquery-1.12.4.min.js"></script>
        <script src="/js/jquery-ui-1.12.1.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>
        <script src="/js/<?=$pn?>.js"></script>
        <script src="/js/header.js"></script>
        <script src="/sub/js/<?=$pn?>.js"></script>
        <script src="/sub/js/<?=$pname?>.js"></script>
    </head>

    <body>
        <header>
            <div id="headerLogo">
                <h1>
                    <a href="/index.php">
                        <img src="image/header/header_logo.png" alt="macho chef logo">
                    </a>
                </h1>
            </div>

            <div class="signBox">

                <?if(empty($_SESSION['userid'])){?>
                <div class="signIn">
                    <a href="/sub/start.php" class="start">로그인</a>
                    <a href="/sub/register.php" class="register">회원가입</a>
                </div>
                <?}else{?>

                <form action="/act/logout.php" method="post" class="signOut">
                    <p><span class="nickname"><?=$_SESSION['username']?></span>님 환영합니다.</p>

                    <button>로그아웃</button>
                </form>

                <?}?>

            </div>

            <div id="lnb">
                <nav class="lnbWrap">
                    <ul class="lnbLeft">
                        <li><a href="/sub/brand_story.php">마초쉐프</a>
                            <ul class="smenu lnb-story en">
                                <li><a href="/sub/brand_story.php">Brand story</a></li>
                                <li><a href="/sub/brand_identity.php">Brand identity</a></li>
                            </ul>
                        </li>

                        <li><a href="/sub/menu_steak.php">메뉴안내</a>
                            <ul class="smenu lnb-food en">
                                <li><a href="/sub/menu_steak.php">STEAK &amp; SALAD</a></li>
                                <li><a href="/sub/menu_risotto.php">RISOTTO &amp; PILAF</a></li>
                                <li><a href="/sub/menu_pizza.php">PIZZA</a></li>
                                <li><a href="/sub/menu_pasta.php">PASTA</a></li>
                                <li><a href="/sub/menu_fried.php">FRIED &amp; BEVERAGE</a></li>
                                <li><a href="/sub/menu_setmenu.php">SET MENU</a></li>
                            </ul>
                        </li>

                        <li><a href="/sub/store.php">매장위치</a></li>
                    </ul>

                    <ul class="lnbRight">
                        <li><a href="/sub/interior.php">인테리어</a></li>

                        <li><a href="/sub/community_notice.php">커뮤니티</a>
                            <ul class="smenu lnb-com">
                                <li><a href="/sub/community_notice.php">공지사항</a></li>
                                <li><a href="/sub/community_customer.php">고객의소리</a></li>
                                <li><a href="/sub/community_staff.php">스텝모집</a></li>
                            </ul>
                        </li>

                        <li><a href="/sub/event.php">이벤트</a></li>
                    </ul>
                </nav>
            </div>

            <div class="hambuger-menu">
                <span></span>
                <span></span>
                <span></span>
                <a href="#"></a>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li><a href="/sub/brand_story.php">마초쉐프</a></li>
                    <li><a href="/sub/menu_steak.php">메뉴안내</a></li>
                    <li><a href="/sub/store.php">매장위치</a></li>
                    <li><a href="/sub/interior.php">인테리어</a></li>
                    <li><a href="/sub/community_notice.php">커뮤니티</a></li>
                    <li><a href="/sub/event.php">이벤트</a></li>
                </ul>
            </nav>
        </header>
        <!--//header-->