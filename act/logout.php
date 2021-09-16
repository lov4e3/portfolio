<?

    session_start();
    session_destroy();

    echo "<script>alert('로그아웃되었습니다!');</script>";
    echo "<script>location.href='/index.php';</script>";

?>