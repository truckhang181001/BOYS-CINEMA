<div class="row film-detail" style="width:100%">
    <?php
    require_once "./share/navBarAdmin.php";
    ?>
    <div class="col-12 col-md-10 container-right p-5">
        <h2 class="d-flex justify-content-center main-title">CHI TIẾT VÀ CHỈNH SỬA PHIM</h2>
        <form enctype="multipart/form-data" method="post">
            <div class="row mb-3">
                <label for="recipient-name" class="col-form-label">Tên phim:</label>
                <input name="name" type="text" class="form-control" id="update_name" value="<?php echo $data["film"]->name ?>">
            </div>
            <div class="row mb-3">
                <label for="message-text" class="col-form-label">Mô tả:</label>
                <textarea name="desc" class="form-control" id="message-text"><?php echo $data["film"]->desc ?></textarea>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="id_category" class="col-form-label">Thể loại:</label>
                    <select name="id_category" class="form-select" id="cid_ategory" aria-label="Default select example">
                        <?php
                        foreach ($data["category"] as $item) {
                            if ($item->id == $data["film"]->id_category)
                                echo "
                                <option value='$item->id' selected>$item->name</option>";
                            else echo "
                                <option value='$item->id'>$item->name</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="col-3">
                    <label for="release" class="col-form-label">Ngày công chiếu:</label>
                    <input name="release" type="date" class="form-control" id="release" value="<?php echo $data["film"]->release ?>">
                </div>
                <div class="col-3">
                    <label for="companyFilm" class="col-form-label">Hãng sản xuất:</label>
                    <input name="studio" type="text" class="form-control" id="studio" value="<?php echo $data["film"]->studio ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="director" class="col-form-label">Đạo diễn:</label>
                    <input name="director" type="text" class="form-control" id="director" value="<?php echo $data["film"]->director ?>">
                </div>
                <div class="col-3">
                    <label for="actor" class="col-form-label">Diễn viên:</label>
                    <input name="actor" type="text" class="form-control" id="actor" value="<?php echo $data["film"]->actor ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-3">
                    <label for="time" class="col-form-label">Thời lượng:</label>
                    <input name="time" type="number" class="form-control" id="time" value="<?php echo $data["film"]->time ?>">
                </div>
                <div class="col-3">
                    <label for="type" class="col-form-label">Hình thức:</label>
                    <select name="type" class="form-select" id="type" aria-label="Default select example">
                        <option value="<?php echo $data["film"]->type ?>" selected><?php echo $data["film"]->type ?></option>
                        <?php
                        if ($data["film"]->type == "2D")
                            echo "<option value='3D'>3D</option>";
                        else echo "<option value='2D'>2D</option>";
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="poster" class="col-form-label">Poster:</label>
                <?php
                if ($data['img'] != null) {
                    foreach ($data['img'] as $item) {
                        if ($item->type == "poster") {
                            echo "<img style='height: 250px; width: auto;' src='" . PRONAME . "/public/img/$item->name' alt=''>";
                            break;
                        }
                    }
                }
                ?>
                <div class="input-group mt-3 mb-3">
                    <label class="input-group-text" for="poster">Thay đổi ảnh poster</label>
                    <input class="form-control" name="poster" type="file" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="detail[]" class="col-form-label">Hình ảnh:</label>
                <?php
                if ($data['img'] != null) {
                    foreach ($data['img'] as $item) {
                        if ($item->type == "detail") {
                            echo "<img src='" . PRONAME . "/public/img/$item->name' alt=''>";
                        }
                    }
                }
                ?>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="detail[]">Upload ảnh chi tiết</label>
                    <input class="form-control" name="detail[]" type="file" multiple="multiple" />
                </div>
            </div>
            <div class="row mb-3">
                <label for="video" class="col-form-label">Trailer:</label>

                <div class="input-group mb-3">
                    <label for="video" class="input-group-text">Trailer:</label>
                    <input class="form-control" name="video" type="file" />
                </div>
            </div>
            <div class="row mb-3">
                <button class="btn btn-primary col-3" type="submit" name="addItemFilm" value="add">SAVE</button>
                <a href="#" class="btn btn-secondary col-3">CANCEL</a>
            </div>
        </form>
    </div>
</div>