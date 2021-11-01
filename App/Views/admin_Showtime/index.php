<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý lịch chiếu</title>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/AdminShowtime.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid d-flex flex-wrap">
        <div class="col-xl-2 col-12" style="background-color: #C4C4C4;">Alo</div>
        <div class="col-xl-10 col-12 showtime-management">
            <div class="showtime-management__func d-flex flex-wrap col-xl-10 col-12">
                <div class="col-xl-8 col-12">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm" aria-label="Username" aria-describedby="basic-addon1">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search showtime-management__func--search"></i></span>

                    </div>
                </div>
                <div class="showtime-management__func__btn d-flex justify-content-around col-md-4 col-8">
                    <button class="btn btn-outline-success text-center showtime-management__func__btn--style" data-bs-toggle="modal" data-bs-target="#showtime-management--btn-add">THÊM</button>
                    <button type="button" class="btn btn-outline-danger text-center showtime-management__func__btn--style" data-bs-toggle="modal" data-bs-target="#showtime-management--btn-delete">XÓA</button>
                    <button type="button" class="btn btn-outline-warning text-center showtime-management__func__btn--style" data-bs-toggle="modal" data-bs-target="#showtime-management--btn-update">SỬA</button>
                </div>
            </div>

            <div class="showtime-management__table col-xl-10 col-12">
                <table class="table table-bordered text-center" border="2">
                    <thead>
                        <tr class="alert alert-info ">
                            <th>#</th>
                            <th>Ngày chiếu</th>
                            <th>Phim công chiếu</th>
                            <th>Rạp chiếu</th>
                            <th>Suất chiếu</th>
                            <th>Phòng chiếu</th>
                            <th>Thành phố</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>28/10/2021</td>
                            <td>Nơi tình yêu bắt đầu</td>
                            <td>Hồ Chí Minh</td>
                            <td>9:00AM-12:45AM</td>
                            <td>03 Sư Vạn Hành</td>
                            <td>Hồ Chí Minh</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="select-check">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>28/10/2021</td>
                            <td>Nơi tình yêu bắt đầu</td>
                            <td>Hồ Chí Minh</td>
                            <td>9:00AM-12:45AM</td>
                            <td>03 Sư Vạn Hành</td>
                            <td>Hồ Chí Minh</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="select-check">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>28/10/2021</td>
                            <td>Nơi tình yêu bắt đầu</td>
                            <td>Hồ Chí Minh</td>
                            <td>9:00AM-12:45AM</td>
                            <td>03 Sư Vạn Hành</td>
                            <td>Hồ Chí Minh</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="select-check">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>28/10/2021</td>
                            <td>Nơi tình yêu bắt đầu</td>
                            <td>Hồ Chí Minh</td>
                            <td>9:00AM-12:45AM</td>
                            <td>03 Sư Vạn Hành</td>
                            <td>Hồ Chí Minh</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="select-check">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>28/10/2021</td>
                            <td>Nơi tình yêu bắt đầu</td>
                            <td>Hồ Chí Minh</td>
                            <td>9:00AM-12:45AM</td>
                            <td>03 Sư Vạn Hành</td>
                            <td>Hồ Chí Minh</td>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="select-check">
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <!-- Phân trang -->
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
    </div>
    </div>

    <!-- THÊM LỊCH CHIẾU -->
    <div class="modal" id="showtime-management--btn-add" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark">THÊM LỊCH CHIẾU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="GET">
                    <div class="modal-body container">
                        <div class="mb-3">
                            <label for="date" class="form-label">Ngày chiếu</label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="film" class="form-label">Phim công chiếu</label>
                            <select class="form-select">
                                <option value="Chọn phim" selected>Chọn phim</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-5">
                                <label for="film" class="form-label">Chọn rạp chiếu</label>
                                <select class="form-select">
                                    <option value="Chọn phim" selected>Chọn rạp</option>
                                    <option value="Sư Vạn Hạnh">Sư Vạn Hạnh</option>
                                    <option value="Rạp B">Rạp B</option>                                    
                                </select>
                            </div>
                            <div class="col-5">
                                <label for="city" class="form-label">Thành phố</label>
                                <select class="form-select">
                                    <option value="Chọn phim" selected>Thành phố</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="Hà Nội">Hà Nội</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-4">
                                <label for="timeStart" class="form-label">Giờ bắt đầu</label>
                                <input type="time" class="form-control" name="timeStart">
                            </div>
                            <div class="col-4">
                                <label for="timeEnd" class="form-label">Giờ kết thúc</label>
                                <input type="time" class="form-control" name="timeEnd">
                            </div>
                            <div class="col-3">
                                <label for="show-room" class="form-label">Phòng chiếu</label>
                                <select class="form-select">
                                    <option value="Chọn phòng" selected>Phòng</option>
                                    <option value="03 Sư Vạn Hạnh">03 Sư Vạn Hạnh</option>
                                    <option value="06 Sư Vạn Hạnh">06 Sư Vạn Hạnh</option>                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-success">Xác nhận</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
    <!-- XÓA LỊCH CHIẾU -->
    <div class="modal" id="showtime-management--btn-delete" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark">XÓA LỊCH CHIẾU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action=""></form>
                <div class="modal-body container">
                    <?php
                   
                        echo "Xác nhận xóa lịch chiếu";
                    
                    ?>
                </div>
                <form action="">
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-danger">Xác nhận</button>
                    </div>
                </form>
               

            </div>
        </div>
    </div>
    <!-- CẬP NHẬT LỊCH CHIẾU -->
    <div class="modal" id="showtime-management--btn-update" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark">THÊM LỊCH CHIẾU</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="GET">
                    <div class="modal-body container">
                        <div class="mb-3">
                            <label for="date" class="form-label">Ngày chiếu</label>
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="film" class="form-label">Phim công chiếu</label>
                            <select class="form-select">
                                <option value="Chọn phim" selected>Chọn phim</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-5">
                                <label for="film" class="form-label">Chọn rạp chiếu</label>
                                <select class="form-select">
                                    <option value="Chọn phim" selected>Chọn rạp</option>
                                    <option value="Sư Vạn Hạnh">Sư Vạn Hạnh</option>
                                    <option value="Rạp B">Rạp B</option>                                    
                                </select>
                            </div>
                            <div class="col-5">
                                <label for="city" class="form-label">Thành phố</label>
                                <select class="form-select">
                                    <option value="Chọn phim" selected>Thành phố</option>
                                    <option value="Hồ Chí Minh">Hồ Chí Minh</option>
                                    <option value="Hà Nội">Hà Nội</option>                                    
                                </select>
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-between">
                            <div class="col-4">
                                <label for="timeStart" class="form-label">Giờ bắt đầu</label>
                                <input type="time" class="form-control" name="timeStart">
                            </div>
                            <div class="col-4">
                                <label for="timeEnd" class="form-label">Giờ kết thúc</label>
                                <input type="time" class="form-control" name="timeEnd">
                            </div>
                            <div class="col-3">
                                <label for="show-room" class="form-label">Phòng chiếu</label>
                                <select class="form-select">
                                    <option value="Chọn phòng" selected>Phòng</option>
                                    <option value="03 Sư Vạn Hạnh">03 Sư Vạn Hạnh</option>
                                    <option value="06 Sư Vạn Hạnh">06 Sư Vạn Hạnh</option>                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer ">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button type="submit" class="btn btn-warning text-light">Xác nhận</button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</body>

</html>