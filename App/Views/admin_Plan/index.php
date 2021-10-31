<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/AdminPlan.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <div class="row container-fluid" style="margin:0">
    <div class="col-md-2">
        đây là nav bên trái
    </div>
    <div class="col-12 col-md-10 container-right">
        <h2 class="d-flex justify-content-center main-title">QUẢN LÝ KẾ HOẠCH</h2>

        <div class="row search-and-button-gr">
            <div class="col-12 col-md-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
            </div>
            <div class="button-gr col-12 col-md-6">
                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalAddFilm">THÊM PHIM</button>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalDeleteFilm">XÓA PHIM</button>
                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalUpdateFilm">CẬP NHẬT</button>
            </div>
        </div>
        <div class="table-sticky">
          <table class="table">
              <thead>
                  <tr>
                  <th scope="col">ID Phim</th>
                  <th scope="col"><p>Tên phim</p></th>
                  <th scope="col">Ngày Khởi chiếu</th>
                  </tr>
              </thead>
              <tbody>

                <?php 
                  for($i=1;$i<10;$i++){
                    echo '
                    <tr>
                      <td>'.$i.'</td>
                      <td class="namefilm"><p>Tôi thấy hoa vàng trên cỏ xanh</p></td>
                      <td class="date"><p>29/10/2021</p></td>
                      <td> <input class="form-check-input" type="checkbox" name="flexCheckboxFilm"> </td>
                    </tr>
                    <tr>
                    ';
                  }
                ?>   

              </tbody>
          </table>
        </div>

        <nav aria-label="Page navigation example" style="margin-top:40px">
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
    <div class="modal fade" id="ModalDeleteFilm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BẠN MUỐN XÓA PHIM NÀY ?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tên của phim ở đây nè !
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
            </div>
        </div>
    </div>
    <!-- modal thêm phim -->
    <div class="modal fade" id="ModalAddFilm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">BẠN ĐANG THÊM PHIM MỚI</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Tên phim:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <label for="release-time" class="col-form-label">Ngày khởi chiếu:</label>
                    <input type="date" class="form-control" id="release-time">
                  </div>
                </div>
              </form>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
              <button type="button" class="btn btn-primary">Xác nhận</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal cập nhật phim -->
    <div class="modal fade" id="ModalUpdateFilm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">BẠN ĐANG CẬP NHẬT PHIM</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Tên phim:</label>
                  <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="row mb-3">
                  <div class="col-6">
                    <label for="release-time" class="col-form-label">Ngày khởi chiếu:</label>
                    <input type="date" class="form-control" id="release-time">
                  </div>
                </div>
              </form>
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