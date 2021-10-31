<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/AdminCustomer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="row container-fluid">
        <div class="col-md-2">
            đây là nav bên trái
        </div>
        <div class="col-12 col-md-10 container-right">
            <h2 class="d-flex justify-content-center main-title">QUẢN LÝ KHÁCH HÀNG</h2>

            <div class="row search-and-button-gr">
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div>
                </div>
                <div class="button-gr col-12 col-md-6">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalAddCustomer">THÊM KHÁCH</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteCustomer">XÓA KHÁCH</button>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalUpdateCustomer">CẬP NHẬT</button>
                </div>
            </div>
            <div class="table-sticky">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID khách</th>
                        <th scope="col"><p>Tên khách</p></th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Dod</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        for($i=1;$i<10;$i++){
                            echo '<tr>
                            <td>'.$i.'</td>
                            <td class="namecustomer"><p>Bùi Minh Kha</p></td>
                            <td>Nam</td>
                            <td>0374996432</td>
                            <td>khabui.bit.dev@gmail.com</td>
                            <td>khabui.bit.abc</td>
                            <td>3D</td>
                            <td> <input class="form-check-input" type="checkbox" name="flexRadioCustomer"> </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            
            <nav aria-label="Page navigation example" style="margin:40px 0">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link">Trước</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Sau</a>
                </li>
              </ul>
            </nav>

        </div>
    </div>
    <!-- modal xác nhận xóa -->
    <div class="modal fade" id="ModalDeleteCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BẠN CHẮC CHẮN MUỐN XÓA ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Khách hàng: Ngô Nguyễn Dương Khang
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
            </div>
        </div>
    </div>
    <!-- modal thêm khách hàng -->
    <div class="modal fade" id="ModalAddCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">BẠN ĐANG THÊM KHÁCH HÀNG MỚI</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                  <label for="customer-name" class="col-form-label">Tên khách hàng:</label>
                  <input type="text" class="form-control" id="customer-name" required>
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Số điện thoại" required>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2d" value="option1" required>
                            <label class="form-check-label" for="inlineRadio2d">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3d" value="option2" required>
                            <label class="form-check-label" for="inlineRadio3d">Nữ</label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="input-email" class="form-label">Email:</label>
                    <input class="form-control" type="email" id="input-email" required>
                </div>

                <div class="mb-3">
                    <label for="input-password" class="form-label">Mật khẩu:</label>
                    <input class="form-control" type="password" id="input-password" required>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal cập nhật khách hàng -->
     <div class="modal fade" id="ModalUpdateCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">BẠN MUỐN THÊM KHÁCH HÀNG MỚI</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="customer-name" class="col-form-label">Tên khách hàng:</label>
                  <input type="text" class="form-control" id="customer-name" value="BÙI MINH KHA">
                </div>

                <div class="row mb-3">
                    <div class="col-6">
                        <input type="text" class="form-control" placeholder="Số điện thoại" value="0374996432">
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioMale" value="option1" checked>
                            <label class="form-check-label" for="inlineRadioMale">Nam</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadioFemale" value="option2">
                            <label class="form-check-label" for="inlineRadioFemale">Nữ</label>
                        </div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <label for="input-email" class="form-label">Email:</label>
                    <input class="form-control" type="email" id="input-email" value="khabui.bit.dev@gmail.com">
                </div>

                <div class="mb-3">
                    <label for="input-password" class="form-label">Mật khẩu:</label>
                    <input class="form-control" type="password" id="input-password" value="khabui.bit.abc">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>