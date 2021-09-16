<?include("../header.php");?>

<?
    if(empty($_SESSION['userid'])){
        print "<script>alert('로그인이 필요합니다.');</script>";
        print "<script>location.href='/sub/community_notice.php';</script>";
    }
?>

<?
    if(!empty($_POST['title']) && !empty($_POST['body'])){
        $sql = "INSERT INTO board (title, writer, body) VALUES ('{$_POST['title']}', '{$_SESSION['username']}', '{$_POST['body']}')";

        $result = mysqli_query($con, $sql);

        if($result){
            $last_no = mysqli_insert_id($con);
        }

        print "<script>alert('글이 정상적으로 등록되었습니다.');</script>";
        print "<script>location.href='view.php?no=".$last_no."';</script>";
    }
?>

    <section>
        <div class="inner-section">
            <h2>게시글 작성</h2>
            <form name="write" method="post">
                <div class="writeBox">
                    <div class="title">
                        <label for="title">제목</label>
                        <input type="text" name="title">
                    </div>
                    <div class="writer">
                        <label for="writer">작성자</label>
                        <input type="text" name="writer" value="<?=$_SESSION['username']?>" disabled>
                    </div>
                    <div class="content">
                        <label for="body" name="body">내용</label>
                        <textarea name="body"></textarea>
                    </div>
                </div>

                <div class="btngrp">
                    <a href="community_notice.php" class="btn">목록</a>
                    <input type="submit" class="btn" value="등록">
                </div>
            </form>
        </div>
    </section>

    <?include("../footer.php");?>