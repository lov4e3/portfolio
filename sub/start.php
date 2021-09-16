<?include("../header.php");?>


<section>
    <div class="start-section">
        <div class="startBox">
            <div class="box">
                <div class="txt-box">
                    <h2>로그인</h2>
                    <p>마초쉐프에 오신 것을 환영합니다.</p>
                </div>

                <form action="../act/login.php" method="post" name="logfrm">
                    <div class="id"><input type="text" name="userid" placeholder="아이디를 입력해 주세요."></div>
                    <div class="password"><input type="password" name="userpw" placeholder="비밀번호를 입력해 주세요."></div>

                    <label><input type="checkbox" checked>아이디 저장</label>

                    <div class="btngrp">
                        <button class="login btn">로그인</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?include("../footer.php");?>