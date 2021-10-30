<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/AdminCategory.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
<body>
    <div class="row container-fluid" style="margin:0">
        <div class="col-md-2">
            đây là nav bên trái
        </div>
        <div class="col-12 col-md-10 container-right">
            <h2 class="d-flex justify-content-center main-title">QUẢN LÝ THỂ LOẠI</h2>

            <div class="row search-and-button-gr">
                <div class="col-12 col-md-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                    </div>
                </div>
                <div class="button-gr col-12 col-md-6">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalAddCategory">THÊM</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteCategory">XÓA</button>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalUpdateCategory">CẬP NHẬT</button>
                </div>
            </div>
            <div class="table-cover">
              <table class="table">
                  <thead>
                      <tr>
                      <th scope="col">ID Thể loại</th>
                      <th scope="col">Tên thể loại</th>
                      </tr>
                  </thead>
                  <tbody>

                    <?php 
                      for($i=1;$i<10;$i++){
                        echo '
                        <tr>
                          <td class="idcategory">'.$i.'</td>
                          <td class="namecategory">Tình cảm</td>
                          <td> <input class="form-check-input" type="checkbox" name="flexRadioFilm"> </td>
                        </tr>
                        <tr>
                        ';
                      }
                    ?>   

                  </tbody>
              </table>
            </div>
        </div>
    </div>
    <!-- modal xác nhận xóa -->
    <form>
      <div class="modal fade" id="ModalDeleteCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">BẠN MUỐN XÓA THỂ LOẠI NÀY ?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  Tên thể loại ở đây nè !
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                  <button type="submit" class="btn btn-primary">Xác nhận</button>
              </div>
              </div>
          </div>
      </div>
    </form>
    
    <!-- modal thêm thể loại -->
    <form>
      <div class="modal fade" id="ModalAddCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BẠN ĐANG THÊM THỂ LOẠI MỚI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Tên thể loại:</label>
                    <input type="text" class="form-control" id="recipient-name" required>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary">Xác nhận</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- modal cập nhật thể loại -->
    <form>
      <div class="modal fade" id="ModalUpdateCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BẠN ĐANG CẬP NHẬT THỂ LOẠI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Tên thể loại:</label>
                    <input type="text" class="form-control" id="recipient-name" required value="Hành động">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary">Xác nhận</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

</body>
</html>