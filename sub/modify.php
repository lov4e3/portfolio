<?include("../header.php");?>

<?
    if(empty($_SESSION['userid'])){
        print "<script>alert('로그인이 필요합니다.');</script>";
        print "<script>history.go(-1);</script>";
    }
?>

<?
    if($no = $_GET['no']){
        $sql = "SELECT * from board where no=$no";
        $result = mysqli_query($con, $sql);
        $info = mysqli_fetch_array($result);
    }

    if(!empty($_POST['title']) && !empty($_POST['body'])){
        $sql = "UPDATE board set title='{$_POST['title']}', body='{$_POST['body']}' where no = '{$_POST['no']}'";

        mysqli_query($con, $sql);

        print "<script>alert('글이 정상적으로 수정되었습니다.');</script>";
        print "<script>location.href='view.php?no=".$no."';</script>";
    }
?>

    <section>
        <div class="inner-section">
           <h2>게시글 수정</h2>
            <form name="modify" method="post">
                <div class="modifyBox">
                    <div class="title">
                        <label for="title">제목</label>
                        <input type="text" name="title" value="<?=$info['title']?>">
                    </div>
                    <div class="writer">
                        <label for="writer">작성자</label>
                        <input type="text" name="writer" value="<?=$info['writer']?>" disabled>
                    </div>
                    <div class="content">
                        <label for="body" name="body">내용</label>
                        <textarea name="body"><?=$info['body']?></textarea>
                        <input type="hidden" name="no" value="<?=$no?>">
                    </div>
                </div>

                <div class="btngrp">
                    <a href="community_notice.php" class="btn">목록</a>
                    <input type="submit" class="btn" value="수정">
                </div>
            </form>
        </div>
    </section>

    <?include("../footer.php");?>