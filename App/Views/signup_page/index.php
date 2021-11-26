<form action="" method="$_POST">
    <section class="login-section">
        <div class="login">
            <div class="login__sub-title">
                WELCOME
            </div>
            <div class="login__title">
                TO BOYSCINEMA
            </div>
            <div class="login__input" style="margin-bottom: 30px;">
                <div class="login__input__title">
                    HỌ VÀ TÊN<span>*</span>
                </div>
                <input type="text" name="userPswConf" class="login__input__username" style="color:white" placeholder="Nhập họ và tên" required>
            </div>
            <div class="login__input">
                <div class="login__input__title">
                    EMAIL<span>*</span>
                </div>
                <input type="email" name="userEmail" class="login__input__email" style="color:white" placeholder="Nhập email" required>
            </div>
            <div class="login__input mb-4">
                <div class="login__input__title">
                    MẬT KHẨU<span>*</span>
                </div>
                <input type="password" name="userPsw" class="login__input__psw" style="color:white" placeholder="Nhập mật khẩu" required>
            </div>
            <div class="login__input mb-5">
                <div class="login__input__title">
                    NHẬP LẠI MẬT KHẨU<span>*</span>
                </div>
                <input type="password" name="userPswConf" class="login__input__psw-confirm" style="color:white" placeholder="Nhập mật khẩu" required>
            </div>

            <!-- code chua dung den -->
            <div>
                <!--
                <div class="login__input mb-5">
                    <div class="login__input__title">
                        GIỚI TÍNH<span>*</span>
                    </div>
                    <input type="text" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập giới tính">
                </div>
                <div class="login__input mb-5">
                    <div class="login__input__title">
                        NĂM SINH<span>*</span>
                    </div>
                    <input style="color: white" type="date" name="userPswConf" class="login__input__psw-confirm">
                </div>
                <div class="login__input mb-5">
                    <div class="login__input__title">
                        SỐ ĐIỆN THOẠI<span>*</span>
                    </div>
                    <input type="number" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập số điện thoại">
                </div>
                <div class="login__input mb-5">
                    <div class="login__input__title">
                        ĐỊA CHỈ<span>*</span>
                    </div>
                    <input type="text" name="userPswConf" class="login__input__psw-confirm" placeholder="Nhập địa chỉ">
                </div> -->
            </div>

            <input type="submit" class="login__btn btnf" value="ĐĂNG KÝ" style="border:none">
            <div class="login__sign-up">
                <a href="<?php echo PRONAME ?>/dang-nhap" class="login__sign-up__btn">Đăng nhập ngay</a>
            </div>
        </div>
    </section>
</form>