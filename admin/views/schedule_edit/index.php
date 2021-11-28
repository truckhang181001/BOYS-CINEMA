<?php
require_once "./public/php/admin/schedule/schedule_edit.php";
?>
<div class="schedule-detail row" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php"; 
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA LỊCH CHIẾU</h2>
        <form enctype="multipart/form-data" method="post" action="">
        <div class="row mb-3">
                <label for="id_film" class="col-form-label">Tên Phim:</label>
                <select name="id_film" class="form-select" id="id_film" aria-label="Default select example">
                    <?php
                    foreach ($data["film"] as $item) {
                        if($data['schedule']->id_film==$item->id){
                            echo "
                            <option selected value='$item->id'>$item->name</option>";
                        }else{
                            echo "<option value='$item->id'>$item->name</option>";
                        }
                        
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="id_theater" class="col-form-label">Địa chỉ rạp:</label>
                <select name="id_theater" class="form-select" id="id_theater" aria-label="Default select example">
                    <?php
                    foreach ($data["theater"] as $item) {
                        if($data['schedule']->id_theater==$item->id){
                            echo "
                            <option selected value='$item->id'>$item->address</option>";
                        }else{
                            echo "<option value='$item->id'>$item->address</option>";
                        }
                        
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="id_room" class="col-form-label">Phòng:</label>
                <select name="id_room" class="form-select" id="id_room" aria-label="Default select example">
                    <?php
                    foreach ($data["room"] as $item) {
                        if($data['schedule']->id_room==$item->id){
                            echo "
                            <option selected value='$item->id'>$item->name</option>";
                        }else{
                            echo "<option value='$item->id'>$item->name</option>";
                        }
                        
                    }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="date" class="col-form-label">Ngày chiếu:</label>
                <input name="date" type="date" class="form-control" id="date" value="<?php echo $data['schedule']->date?>">
            </div>
            
            <div class="row mb-3">
                <button class="btn btn-primary" type="submit" name="editItemSchedule" value="<?php echo $data['schedule']->id?>">EDIT</button>
            </div>
        </form>
    </div>
</div>