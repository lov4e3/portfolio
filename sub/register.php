<?include("../header.php");?>

<?
    if(!empty($_POST['userid'] && !empty($_POST['userpw'] && !empty($_POST['username'])))){

        $sql = "INSERT INTO customer (userid, userpw, username, useremail, nickname, city) VALUES ('{$_POST['userid']}','{$_POST['userpw']}','{$_POST['username']}','{$_POST['useremail']}','{$_POST['nickname']}','{$_POST['city']}')";

        print "<script>alert('회원가입이 완료되었습니다.');</script>";
        print "<script>location.href='/index.php';</script>";

        mysqli_query($con, $sql);
    }

    //mysqli_query($con, $sql);
?>

    <section>
        <div class="join-section">
            <div class="joinBox">
                <div class="box">
                    <div class="txt-box">
                       <p class="title">회원가입</p>
                        <div class="img-box">
                            <img src="/image/header/macho.png" alt="마초쉐프">
                        </div>

                        <div class="txt">
                            <p>마초쉐프에 오신 것을 환영합니다.</p>
                            <span>*표시는 필수입력 항목입니다.</span>
                        </div>
                    </div>

                    <form method="post" name="regfrm">
                        <fieldset class="required">
                            <legend>필수사항 입력</legend>

                            <table>
                                <tr>
                                    <th>아이디*</th>
                                    <td>
                                        <input type="text" name="userid" required>
                                        <span>(영문,숫자 혼합한 4~13자리 사이로 입력하세요.)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>비밀번호*</th>
                                    <td>
                                        <input type="password" name="userpw" required>
                                        <span>(영문,숫자 혼합한 8~12자리 사이로 입력하세요.)</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>이름*</th>
                                    <td>
                                        <input type="text" name="username" required>
                                    </td>
                                </tr>
                                <tr>
                                    <th>이메일</th>
                                    <td><input type="email" name="useremail"></td>
                                </tr>
                            </table>
                        </fieldset>

                        <fieldset class="optional">
                            <legend>선택사항 입력</legend>

                            <table>
                                <tr>
                                    <th>닉네임</th>
                                    <td>
                                        <input type="text" name="nickname" placeholder="한글 6자리 이내로 입력하세요.">
                                    </td>
                                </tr>
                                <tr>
                                    <th>지역</th>
                                    <td>
                                        <input type="text" name="city">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>

                        <button class="btn">가입하기</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?include("../footer.php");?>