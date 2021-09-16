<?include("../header.php");?>

<?

    $no = $_GET['no']; //6
    $sql = "SELECT * from board where no=$no";
    $result = mysqli_query($con, $sql);
    $info = mysqli_fetch_array($result);

    $sql = "SELECT * FROM board WHERE `no`<$no AND (title LIKE '%{$_GET['search']}%' OR body LIKE '%{$_GET['search']}%') ORDER BY `no` DESC LIMIT 1";
    $result = mysqli_query($con, $sql);
    $pre = mysqli_fetch_array($result);

    $sql = "SELECT * FROM board WHERE `no`>$no AND (title LIKE '%{$_GET['search']}%' OR body LIKE '%{$_GET['search']}%') ORDER BY `no` ASC LIMIT 1";
    $result = mysqli_query($con, $sql);
    $next = mysqli_fetch_array($result);

?>

    <section>
        <div class="inner-section">
            <h2>게시글</h2>
            <div class="viewBox">
                <table>
                    <thead>
                        <tr>
                            <th>
                                <p class="title"><?=$info['title']?></p>

                                <div class="sub-title">
                                    <p class="writer">작성자<span class="name"><?=$info['writer']?></span></p>
                                    <p class="date">등록일<span class="day"><?=$info['time']?></span></p>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="content"><?=$info['body']?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="viewBtn">
                <a href="community_notice.php" class="btn">목록</a>
                <a href="modify.php?no=<?=$no?>" class="btn">수정</a>
            </div>

            <table class="pageList">
                <tr>
                    <th>이전글</th>
                    <td>
                        <? if($pre['title']){ ?>
                        <a href="?no=<?=$pre['no']?>&search=<?=$_GET['search']?>">
                            <?=$pre['title']?>
                        </a>
                        <?}else{?><span>이전글이 없습니다.</span>
                            <?}?>
                    </td>
                </tr>

                <tr>
                    <th>다음글</th>
                    <td>
                        <? if($next['title']){ ?>
                        <a href="?no=<?=$next['no']?>&search=<?=$_GET['search']?>">
                            <?=$next['title']?>
                        </a>
                        <?}else{?><span>다음글이 없습니다.</span>
                            <?}?>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <?include("../footer.php");?>