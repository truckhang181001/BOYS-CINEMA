<?php
$controller = new controller();
$tbl_film = $controller->getModel("tbl_film");

if(isset($_POST['deleteItem'])){
    $tbl_film->deleteFilm($_POST['deleteItem']);
    // Clear POST
    header("Location: ".CURLINK);
    exit;
    echo "<script>alert('Xóa thành công item')</script>";
}