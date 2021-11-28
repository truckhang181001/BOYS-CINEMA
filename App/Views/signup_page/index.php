
<?php
    require "./public/php/app/sign_up/mail.php";
?>
<section class="login-section">
    <div class="login">
        <form action="" method="post">
            <div class="login__sub-title">
                WELCOME
            </div>
            <div class="login__title">
                TO BOYSCINEMA
            </div>
            <div class="login__input" style="margin-bottom: 30px;">
                <div class="login__input__title">
                    EMAIL<span>*</span>
                </div>
                <input required type="text" name="userEmail" class="login__input__email" placeholder="Nhập email">
            </div>
            <div class="login__input mb-4">
                <div class="login__input__title">
                    MẬT KHẨU<span>*</span>
                </div>
                <input required type="text" name="userPsw" class="login__input__psw" placeholder="Nhập mật khẩu">
            </div>
            <div class="login__input mb-5">
                <div class="login__input__title">
                    NHẬP LẠI MẬT KHẨU<span>*</span>
                </div>
                <input required type="text" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập mật khẩu">
            </div>
            <div class="login__input mb-5">
                <div class="login__input__title">
                    HỌ VÀ TÊN<span>*</span>
                </div>
                <input required type="text" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập họ và tên">
            </div>
            <div class="login__input mb-5">
                <div class="login__input__title">
                    GIỚI TÍNH<span>*</span>
                </div>
                <input required type="text" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập giới tính">
            </div>
            <div class="login__input mb-5">
                <div class="login__input__title">
                    NĂM SINH<span>*</span>
                </div>
                <input required style="color: white" type="date" name="userPswConf" class="login__input__psw-confirm">
            </div>
            <div class="login__input mb-5">
                <div class="login__input__title">
                    SỐ ĐIỆN THOẠI<span>*</span>
                </div>
                <input required type="tel" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập số điện thoại">
            </div>
            <div class="login__input mb-5">
                <div class="login__input__title">
                    ĐỊA CHỈ<span>*</span>
                </div>
                <input required type="text" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập địa chỉ">
            </div>
            <div>
                <button class="login__btn btnf" type="submit" name="sign-up">ĐĂNG KÝ</button>
            </div>
        </form>
        <div class="login__sign-up">
            <div class="login__sign-up__text">Bạn đã có mật khẩu?</div>
            <a href="<?php echo PRONAME ?>/dang-nhap" class="login__sign-up__btn">Đăng nhập ngay</a>
        </div>
    </section>
</form>