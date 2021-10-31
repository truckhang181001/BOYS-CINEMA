<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/AdminTheater.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="row container-fluid" style="margin:0">
            <div class="col-md-2">NAV</div>
            <div class="col-12 col-md-10 container-right">
                <h2 class="d-flex justify-content-center main-title">QUẢN LÝ RẠP</h2>

                <div class="row select-and-buttons">
                    <div class="col-12 col-md-6">
                        <div class="select-gr">
                            <select class="form-select" id="selectField">
                                <option value="All" selected>Chọn thành phố</option>
                                <option value="HCM">Hồ Chí Minh</option>
                                <option value="HN">Hà Nội</option>
                                <option value="KG">Kiên Giang</option>
                                <option value="NT">Nha Trang</option>
                            </select>
                        </div>
                    </div>

                    <div class="buttons-gr col-12 col-md-6">
                    <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#ModalAddTheater">THÊM</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#ModalRemoveTheater">XÓA</button>
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#ModalUpdateTheater">CẬP NHẬT</button>
                    </div>
                </div>

                <div class="table-sticky">
                    <table class="table" id="myTable">
                        <thead>
                            <tr id="headerRow">
                                <th scope="col">ID Rạp</th>
                                <th scope="col" class="th-text"><p>Tên Rạp</p></th>
                                <th scope="col">Số phòng</th>
                                <th scope="col" class="th-text">Tỉnh thành</th>
                                <th scope="col" class="th-text">Địa chỉ</th>
                                <th scope="col" class="th-text">NV Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr position="HCM">
                                <td>1</td>
                                <td><p>BOYSCINEMA NGUYỄN ĐÌNH CHIỂU</p></td>
                                <td>6</td>
                                <td>Hồ Chí Minh</td>
                                <td>283 Nguyễn Đình Chiểu</td>
                                <td>Nguyễn Trúc Khang</td>
                                <td>
                                    <input type="checkbox" class="form-check-input" name="flexRadioTheater">
                                </td>
                            </tr>
                            <tr position="HN">
                                <td>2</td>
                                <td><p>BOYSCINEMA SUPER PRO VIP MALL</p></td>
                                <td>6</td>
                                <td>Hà Nội</td>
                                <td>03 Nguyễn Xí</td>
                                <td>Bùi Minh Kha</td>
                                <td>
                                    <input type="checkbox" class="form-check-input" name="flexRadioTheater">
                                </td>
                            </tr>
                            <tr position="NT">
                                <td>3</td>
                                <td><p>BOYSCINEMA TRẦN PHÚ PALACE</p></td>
                                <td>6</td>
                                <td>Nha Trang</td>
                                <td>132 Trần Phú</td>
                                <td>Lê Trung Huy</td>
                                <td>
                                    <input type="checkbox" class="form-check-input" name="flexRadioTheater">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
        function addRemoveClass(theRows) {
            theRows.removeClass("odd even");
            theRows.filter(":odd").addClass("odd");
            theRows.filter(":even").addClass("even");
        }
        var rows = $("table#myTable tr:not(#headerRow)");
        addRemoveClass(rows);
        $("#selectField").on("change", function() {
            var selected = this.value;
            if (selected != "All") {
                rows.filter("[position=" + selected + "]").show();
                rows.not("[position=" + selected + "]").hide();
                var visibleRows = rows.filter("[position=" + selected + "]");
                addRemoveClass(visibleRows);
            } else {
                rows.show();
                addRemoveClass(rows);
            }
        });
    });
    </script>

    <!-- modal xác nhận xóa -->
    <div class="modal fade" id="ModalRemoveTheater" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">BẠN CÓ MUỐN XÓA RẠP NÀY?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">*Theater Info*</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary">Xác Nhận</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal thêm rạp -->
    <div class="modal fade"  id="ModalAddTheater" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">THÊM RẠP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tên rạp:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">NV Quản lý:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 ">
                                    <select class="form-select">
                                        <option value="All" selected>Số phòng</option>
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="10">10</option>
                                        <option value="12">12</option>
                                    </select>
                            </div>

                            <div class="col-6 d-flex align-items-center">
                                <select class="form-select">
                                    <option value="All" selected>Chọn thành phố</option>
                                    <option value="HCM">Hồ Chí Minh</option>
                                    <option value="HN">Hà Nội</option>
                                    <option value="KG">Kiên Giang</option>
                                    <option value="NT">Nha Trang</option>
                                </select>                                
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary">Xác Nhận</button>
                </div>
            </div>
        </div>    
    </div>

    <!-- modal cập nhật -->
    <div class="modal fade"  id="ModalUpdateTheater" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">CẬP NHẬT RẠP</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Tên rạp:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">NV Quản lý:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="row mb-3">
                            <div class="col-6 ">
                                    <select class="form-select">
                                        <option value="All" selected>Số phòng</option>
                                        <option value="3">3</option>
                                        <option value="6">6</option>
                                        <option value="10">10</option>
                                        <option value="12">12</option>
                                    </select>
                            </div>

                            <div class="col-6 d-flex align-items-center">
                                <select class="form-select">
                                    <option value="All" selected>Chọn thành phố</option>
                                    <option value="HCM">Hồ Chí Minh</option>
                                    <option value="HN">Hà Nội</option>
                                    <option value="KG">Kiên Giang</option>
                                    <option value="NT">Nha Trang</option>
                                </select>                                
                            </div>
                            
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Địa chỉ:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary">Xác Nhận</button>
                </div>
            </div>
        </div>    
    </div>


</body>
</html>