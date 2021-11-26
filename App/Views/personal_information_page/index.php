<form action="" method="$_POST">
    <section class="personal-info-section">
        <div class="personal-info">
            <div class="personal-info__sub-title">
                CHỈNH SỬA
            </div>
            <div class="personal-info__title">
                THÔNG TIN CÁ NHÂN
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            HỌ VÀ TÊN<span>*</span>
                        </div>
                        <input type="text" name="userPswConf" class="personal-info__input__username" style="color:white" value="Bùi Minh Kha" required>
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            EMAIL<span>*</span>
                        </div>
                        <input type="email" name="userEmail" class="personal-info__input__email" style="color:white" value="buiminhkha@gmail.com" readonly>
                    </div>
        
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            MẬT KHẨU<span>*</span>
                        </div>
                        <input type="password" name="userPsw" class="personal-info__input__psw" value="12345678" style="color:white">
                    </div>
        
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            GIỚI TÍNH<span>*</span>
                        </div>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Chọn giới tính</option>
                            <option value="1">Nam</option>
                            <option value="2">Nữ</option>
                            <option value="3">Khác</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            NĂM SINH<span>*</span>
                        </div>
                        <input style="color: white" type="date" name="userPswConf" class="personal-info__input__psw-confirm">
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            SỐ ĐIỆN THOẠI<span>*</span>
                        </div>
                        <input style="color: white" type="number" name="userPswConf" class="personal-info__input__psw-confirm" value="0374996432" placeholder="Nhập số điện thoại">
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            ĐỊA CHỈ<span>*</span>
                        </div>
                        <input style="color: white" type="text" name="userPswConf" class="personal-info__input__psw-confirm" value="768, Tân Kiều, Tháp Mười" placeholder="Nhập địa chỉ">
                    </div>
                    <input type="submit" class="personal-info__btn btnf" value="CẬP NHẬT" style="border:none">
                </div>   
            </div>
        </div>
    </section>
</form>