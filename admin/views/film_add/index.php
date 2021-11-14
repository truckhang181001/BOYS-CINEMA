<div class="row container-fluid" style="margin:0">
    <div class="col-md-2">
        <?php
        require_once "./share/navBarAdmin.php";
        ?>
    </div>
    <div class="col-12 col-md-10 container-right">
        <h2 class="d-flex justify-content-center main-title">THÊM PHIM</h2>
        <form enctype="multipart/form-data" method="post">
            <div class="row mb-3">
                <label for="recipient-name" class="col-form-label">Tên phim:</label>
                <input name="name" type="text" class="form-control" id="update_name" value="">
            </div>
            <div class="row mb-3">
                <label  for="message-text" class="col-form-label">Mô tả:</label>
                <textarea name="desc" class="form-control" id="message-text"></textarea>
            </div>
            <div class="row mb-3">
                <label for="id_category" class="col-form-label">Thể loại:</label>
                <select name="id_category" class="form-select" id="cid_ategory" aria-label="Default select example">
                    <?php
                        foreach($data["category"] as $item){
                            echo "
                            <option value='$item->id'>$item->name</option>";
                        }
                    ?>
                </select>
            </div>
            <div class="row mb-3">
                <label for="release" class="col-form-label">Ngày công chiếu:</label>
                <input name="release" type="date" class="form-control" id="release" value="">
            </div>
            <div class="row mb-3">
                <label for="companyFilm" class="col-form-label">Hãng sản xuất:</label>
                <input name="studio" type="text" class="form-control" id="studio" value="">
            </div>
            <div class="row mb-3">
                <label for="director" class="col-form-label">Đạo diễn:</label>
                <input name="director" type="text" class="form-control" id="director" value="">
            </div>
            <div class="row mb-3">
                <label for="actor" class="col-form-label">Diễn viên:</label>
                <input name="actor" type="text" class="form-control" id="actor" value="">
            </div>
            <div class="row mb-3">
                <label for="time" class="col-form-label">Thời lượng:</label>
                <input name="time" type="number" class="form-control" id="time" value="">
            </div>
            <div class="row mb-3">
                <label for="type" class="col-form-label">Hình thức:</label>
                <select name="type" class="form-select" id="type" aria-label="Default select example">
                    <option value="2D">2D</option>
                    <option value="3D">3D</option>
                </select>
            </div>
            <div class="row mb-3">
                <label for="poster" class="col-form-label">Poster:</label>
                <input class="form-control" name="poster" type="file"/>
            </div>
            <div class="row mb-3">
                <label for="detail[]" class="col-form-label">Hình ảnh:</label>
                <input class="form-control" name="detail[]" type="file" multiple="multiple" />
            </div>
            <div class="row mb-3">
                <label for="video" class="col-form-label">Trailer:</label>
                <input class="form-control" name="video" type="file"/>
            </div>
            <div class="row mb-3">
                <button class="btn btn-primary" type="submit" name="addItemFilm" value="add">ADD</button>
            </div>
        </form>
    </div>
</div>

<?php
require_once "./public/php/admin/film_add/index.php";
?>