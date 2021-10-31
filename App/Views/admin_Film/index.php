<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/AdminFilm.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 </head>
<body>
    <div class="row container-fluid" style="margin:0">
        <div class="col-md-2">
            đây là nav bên trái
        </div>
        <div class="col-12 col-md-10 container-right">
            <h2 class="d-flex justify-content-center main-title">QUẢN LÝ PHIM</h2>

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
                      <th scope="col" >Mô tả</th>
                      <th scope="col" >Thể loại</th>
                      <th scope="col">Ngày phát hành</th>
                      <th scope="col">Thời lượng</th>
                      <th scope="col">Trải nghiệm</th>
                      
                      </tr>
                  </thead>
                  <tbody>

                    <?php 
                      for($i=1;$i<10;$i++){
                        echo '
                        <tr>
                          <td>'.$i.'</td>
                          <td class="namefilm"><p>Tôi thấy hoa vàng trên cỏ xanh</p></td>
                          <td class="discript"><p>Đây là bộ phim hiếm hoi của Việt Nam nhận giải cao trong liên loan phim quốc tế. Lâu lắm rồi người ta mới thấy một bộ phim điện ảnh về chủ đề nông thôn đậm chất Việt Nam lại được nhiều người Việt chú ý đến như vậy, Sự cố gắng và sáng tạo của đoàn làm phim đã được đền đáp khi mà nhà nhà người người rủ nhau ra rạp để được trải nghiệm một bộ phim Việt có sức hút đặc biệt.</p></td>
                          <td class="category">Tình cảm</td>
                          <td>20/20/2017</td>
                          <td>110</td>
                          <td>3D</td>
                          <td> <input class="form-check-input" type="checkbox" name="flexRadioFilm"> </td>
                        </tr>
                        <tr>
                        ';
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
    <form>
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
                  <button type="submit" class="btn btn-primary">Xác nhận</button>
              </div>
              </div>
          </div>
      </div>
    </form>
    
    <!-- modal thêm phim -->
    <form>
      <div class="modal fade" id="ModalAddFilm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">BẠN ĐANG THÊM PHIM MỚI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Tên phim:</label>
                    <input type="text" class="form-control" id="recipient-name" required>
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Mô tả:</label>
                    <textarea class="form-control" id="message-text" required></textarea>
                  </div>
                  <div class="row mb-3">
                      <div class="col-5">
                      <select class="form-select" required>
                        <option selected disabled value="">Chọn thể loại</option>
                        <option value="1">Tình cảm</option>
                        <option value="2">Hành động</option>
                        <option value="3">Hoạt hình</option>
                      </select>
                      </div>
                      <div class="col-1 d-flex justify-content-center align-items-center" style="padding:0; cursor: pointer;">
                          <i class="fas fa-plus-circle"></i>                   
                      </div>
                      <div class="col-6 d-flex align-items-center">
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2d" value="option1" required>
                              <label class="form-check-label" for="inlineRadio2d">Phim 2D</label>
                          </div>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3d" value="option2" required>
                              <label class="form-check-label" for="inlineRadio3d">Phim 3D</label>
                          </div>
                      </div>
                  </div>
                  <div class="row mb-3">
                      <div class="col-6">
                        <label for="long-time" class="col-form-label">Thời lượng:</label>
                        <input type="text" class="form-control" id="long-time" required>
                      </div>
                      <div class="col-6">
                        <label for="release-time" class="col-form-label">Ngày phát hành:</label>
                        <input type="date" class="form-control" id="release-time" required>
                      </div>
                  </div>
                  <div class="mb-3">
                      <label for="formFile" class="form-label">Ảnh bìa của phim:</label>
                      <input class="form-control" type="file" id="formFile" required>
                  </div>
                  <div class="mb-3">
                      <label for="formFile" class="form-label">Ảnh mô tả phim:</label>
                      <input class="form-control" type="file" id="formFile" multiple>
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
                <div class="mb-3">
                  <label for="message-text" class="col-form-label">Mô tả:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Chọn thể loại</option>
                            <option value="1">Tình cảm</option>
                            <option value="2">Hành động</option>
                            <option value="3">Hoạt hình</option>
                        </select>
                    </div>
                    <div class="col-6 d-flex align-items-center">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2d" value="option1">
                            <label class="form-check-label" for="inlineRadio2d">Phim 2D</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3d" value="option2">
                            <label class="form-check-label" for="inlineRadio3d">Phim 3D</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                      <label for="long-time" class="col-form-label">Thời lượng:</label>
                      <input type="text" class="form-control" id="long-time">
                    </div>
                    <div class="col-6">
                      <label for="release-time" class="col-form-label">Ngày phát hành:</label>
                      <input type="date" class="form-control" id="release-time">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Ảnh bìa của phim:</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Ảnh mô tả phim:</label>
                    <input class="form-control" type="file" id="formFile">
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