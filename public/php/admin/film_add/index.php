<?php
$controller = new controller();
$tbl_film = $controller->getModel("tbl_film");
$tbl_image = $controller->getModel("tbl_image");
if (isset($_POST['addItemFilm'])) {
    insertFilm($tbl_film);
}
function insertFilm($table)
{
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $id_category = $_POST['id_category'];
    $release = $_POST['release'];
    $time = $_POST['time'];
    $actor = $_POST['actor'];
    $director = $_POST['director'];
    $studio = $_POST['studio'];
    $type = $_POST['type'];
    $id_film = $table->insertFilm($name, $desc, $id_category, $release, $time, $actor, $director, $studio, $type);
    uploadImage($id_film, $name, "poster", "img");
    uploadImage($id_film, $name, "detail", "img");
    uploadImage($id_film, $name, "video", "img");
}
function insertImage($id_film, $name, $type)
{
    $controller = new controller();
    $tbl_image = $controller->getModel("tbl_image");
    $tbl_image->insertImage($id_film, $name, $type);
}
function insertPoster()
{
}
function insertVideo()
{
}
function uploadImage($itemID, $itemName = "untitle", $itemPOST, $itemType)
{
    $multi = count($_FILES[$itemPOST]['name']);
    if ($multi > 0) {
        for ($i = 0; $i < $multi; $i++) {
            //Variable
            $fileType = strtolower(pathinfo(basename($_FILES[$itemPOST]["name"][$i]), PATHINFO_EXTENSION));
            $fileID = "_" . round(microtime(true));
            $target_dir = __DIR__ . "/../../../$itemType/";
            $target_file = $target_dir . $itemName . $fileID . "." . $fileType;

            $allowUpload = true;
            $allowType = [
                "video" => ["mp4", "mov"],
                "img" => ["jpg", "jpeg", "png", "gif"]
            ];
            $allowSize = [
                "video" => 300000 * 1000,
                "img" => 5000 * 1000
            ];

            if (!in_array($fileType, $allowType[$itemType])) {
                echo "Không đúng định dạng";
                $allowUpload = false;
            }

            if ($_FILES[$itemPOST]["size"][$i] > $allowSize[$itemType]) {
                echo "Sorry, your file is too large.";
                $allowUpload = false;
            }

            if ($allowUpload == false) {
                echo "Sorry, your file was not uploaded.";
            } else {
                if (move_uploaded_file($_FILES[$itemPOST]["tmp_name"][$i], $target_file)) {
                    echo basename($_FILES[$itemPOST]["name"][$i]) . "was uploaded";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            insertImage($itemID, basename($target_file), $itemType);
        }
    }
}
