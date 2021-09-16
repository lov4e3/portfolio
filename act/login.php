<?
    include("db.php");

    $sql = "SELECT * from customer where userid='{$_POST['userid']}' and userpw='{$_POST['userpw']}'";

    $result = mysqli_query($con, $sql);

    $cnt = mysqli_num_rows($result);

    if($cnt){

        $info = mysqli_fetch_array($result);
        $_SESSION['userid'] = $info['userid'];
        $_SESSION['username'] = $info['username'];

        echo "<script>location.href='/index.php';</script>";
    }else{

        echo "<script>alert('로그인정보를 확인해주세요.');</script>";
        //echo "<script>history.go(-1);</script>";
    }
?>