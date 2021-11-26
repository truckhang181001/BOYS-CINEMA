<form method="post">
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
                        <input type="text" name="userName" class="personal-info__input__username" style="color:white" required>
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            EMAIL<span>*</span>
                        </div>
                        <input type="email" name="userEmail" class="personal-info__input__email" value="" style="color:white" readonly>
                    </div>
        
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            MẬT KHẨU<span>*</span>
                        </div>
                        <input type="password" name="userPsw" class="personal-info__input__psw" style="color:white">
                    </div>
        
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            GIỚI TÍNH<span>*</span>
                        </div>
                        <select  name="userSex" class="form-select" aria-label="Default select example">
     
                            <option value="Nam">Nam</option>
                            <option value="Nữ">Nữ</option>
                            <option value="Khác">Khác</option>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            NGÀY SINH<span>*</span>
                        </div>
                        <input style="color: white" type="date" name="userYear" class="personal-info__input__psw-confirm">
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            SỐ ĐIỆN THOẠI<span>*</span>
                        </div>
                        <input style="color: white" type="text" name="userPhone" class="personal-info__input__psw-confirm"  placeholder="Nhập số điện thoại">
                    </div>
                    <div class="personal-info__input mb-3">
                        <div class="personal-info__input__title">
                            ĐỊA CHỈ<span>*</span>
                        </div>
                        <input style="color: white" type="text" name="userAddress" class="personal-info__input__psw-confirm"  placeholder="Nhập địa chỉ">
                    </div>
                    <button class="personal-info__btn btnf" type="submit" name="updatePersonalInfo" value="1">Cập nhật</button>
                </div>   
            </div>
        </div>
    </section>
</form>

<?php
    $controller = new controller();
    $tbl_customer = $controller->getModel("tbl_customer");
    
    if (isset($_POST['updatePersonalInfo'])) {
        updateCustomer($tbl_customer);
        header("Location: ".CURLINK);
        exit;
    }
    function updateCustomer($tbl_customer)
    {
        $password =$_POST['userPsw'];
        $name = $_POST['userName'];
        $sex = $_POST['userSex'];
        $dob = $_POST['userYear'];
        $address =$_POST['userAddress'];
        $phone = $_POST['userPhone'];
        $tbl_customer->updateCustomer($_POST['updatePersonalInfo'], $password, $name, $sex, $dob, $address, $phone);
    }
?>