<?include("../header.php");?>

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
                <li>고객의소리</li>
            </ul>
        </div>

        <div class="content">
            <h3 id="title">고객의소리</h3>

            <form method="post">
                <table>
                    <tr>
                        <th>제목</th>
                        <td><input type="text" name="title" class="title"></td>
                    </tr>

                    <tr>
                        <th>이름</th>
                        <td><input type="text" name="name" class="name"></td>
                    </tr>

                    <tr>
                        <th>연락처</th>
                        <td>
                            <select name="phone01" class="phone01">
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="011">031</option>
                            </select>
                            <span>&nbsp;-&nbsp;</span>
                            <input type="text" name="phone02" class="phone02" maxlength="4">
                            <span>&nbsp;-&nbsp;</span>
                            <input type="text" name="phone03" class="phone03" maxlength="4">
                        </td>
                    </tr>

                    <tr class="email">
                        <th>이메일</th>
                        <td>
                            <input type="email" class="email01">
                            <span>&nbsp;&#64;&nbsp;</span>
                            <input type="email" class="email02">
                            <span>&nbsp;</span>
                            <select name="email" class="email03">
                                <option value="choose">선택하세요.</option>
                                <option value="naver.com">네이버</option>
                                <option value="gmail.com">구글</option>
                                <option value="daum.net">다음</option>
                                <option value="nate.com">네이트</option>
                                <option value="self">직접입력</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th>내용</th>
                        <td><textarea name="content" placeholder="내용을 입력하세요."></textarea></td>
                    </tr>
                </table>
                <div class="btn-wrap">
                    <input type="submit" value="확인" id="btn_check">
                    <input type="submit" value="취소" id="btn_cancel">
                </div>
            </form>

            <!--<div class="btn-wrap">
                <a href="#" id="btn_check">확인</a>
                <a href="#" id="btn_cancel">취소</a>
            </div>-->
        </div>
    </section>

<?include("../footer.php");?>