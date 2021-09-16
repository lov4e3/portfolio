<?include("../header.php");?>

<?
    $sql = "SELECT * FROM board WHERE title LIKE '%".$_GET['search']."%' or body like '%".$_GET['search']."%' order by `no` desc";

    $result = mysqli_query($con, $sql);
?>

<section>
    <div id="main-bg" class="en">
        <span class="color">color</span>
        <span class="txt">community</span>
    </div>

    <div id="category">
        <div class="a-wrap">
            <a href="community_notice.php" id="notice">공지사항</a>
            <a href="community_customer.php" id="customer">고객의소리</a>
            <a href="community_staff.php" id="staff">스탭모집</a>
        </div>
    </div>

    <div id="sub-cate-wrap">
        <ul id="sub-category">
            <li class="home">home</li>
            <li class="arrow">></li>
            <li>커뮤니티</li>
            <li class="arrow">></li>
            <li>공지사항</li>
        </ul>
    </div>

    <div class="content">
        <h3 id="title">게시글</h3>

        <div class="search">
            <form>
                <input type="text" name="search" placeholder="검색어를 입력해 주세요.">
                <button>검색</button>
            </form>
        </div>

        <table>
            <thead>
                <tr>
                    <th class="no">번호</th>
                    <th class="title">제목</th>
                    <th class="writer">작성자</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="notice-no">공지사항</td>
                    <td class="notice-title">
                        <a href="view.php">마초쉐프 홍보영상입니다.</a>
                    </td>
                    <td class="notice-writer">관리자</td>
                </tr>

                <?
                    while($info = mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td class="no"><?=$info['no']?></td>
                    <td class="title">
                        <a href="view.php?no=<?=$info['no']?>"><?=$info['title']?></a>
                    </td>
                    <td class="writer"><?=$info['writer']?></td>
                </tr>

                <?}?>
                
            </tbody>
        </table>

        <div class="write">
            <a href="write.php">글쓰기</a>
        </div>

        <div class="page">
            <a href="#" class="page01">1</a>
            <a href="#" class="page02">2</a>
            <a href="#" class="page03">3</a>
        </div>
    </div>
</section>

<?include("../footer.php");?>