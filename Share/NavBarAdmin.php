<?php
function UrlProcess()
{
    if (isset($_GET["url"])) {
        return explode("/", filter_var(trim($_GET["url"], "/")));
    }
}

$urlNavAd = UrlProcess();
$activeNavAd = [
    "dashboard" => "",
    "film" => "",
    "customer" => "",
    "schedule" => "",
    "theater" => "",
    "room" => "",
    "price" => "",
    "category" => "",
    "showtime"=>""
];
if (isset($urlNavAd[1])) {
    switch ($urlNavAd[1]) {
        case "film": {
                $activeNavAd["film"] = "nav-ad__item--select";
                break;
            }
        case "customer": {
                $activeNavAd["customer"] = "nav-ad__item--select";
                break;
            }
        case "schedule": {
                $activeNavAd["schedule"] = "nav-ad__item--select";
                break;
            }
        case "theater": {
                $activeNavAd["theater"] = "nav-ad__item--select";
                break;
            }
        case "room": {
                $activeNavAd["room"] = "nav-ad__item--select";
                break;
            }
        case "price": {
                $activeNavAd["price"] = "nav-ad__item--select";
                break;
            }
        case "category": {
                $activeNavAd["category"] = "nav-ad__item--select";
                break;
            }
        default:
            $activeNavAd["dashboard"] = "nav-ad__item--select";
    }
} else $activeNavAd["dashboard"] = "nav-ad__item--select";

echo "
<div class='col-md-2 nav-ad p-0'>
    <div class='nav-ad__logo'>
        <img src='<?php echo PRONAME ?>/public/img/LogoBoys.png' alt=''>
    </div>
    <div class='nav-ad__item ".$activeNavAd['price']."'>
        <a href='".PRONAME."/admin/price'>QUẢN LÝ BẢNG GIÁ</a>
    </div>
    <div class='nav-ad__item ".$activeNavAd['customer']."'>
        <a href='".PRONAME."/admin/customer'>QUẢN LÝ KHÁCH HÀNG</a>
    </div>
    <div class='nav-ad__item ".$activeNavAd['film']."'>
        <a href='".PRONAME."/admin/film'>QUẢN LÝ PHIM</a>
    </div>
    <div class='nav-ad__item ".$activeNavAd['category']."'>
        <a href='".PRONAME."/admin/category'>QUẢN LÝ THỂ LOẠI</a>
    </div>
    <div class='nav-ad__item ".$activeNavAd['theater']."'>
        <a href='".PRONAME."/admin/theater'>QUẢN LÝ RẠP</a>
    </div>
    <div class='nav-ad__item ".$activeNavAd['room']."'>
        <a href='".PRONAME."/admin/room'>QUẢN LÝ PHÒNG CHIẾU</a>
    </div>
    <div class='nav-ad__item ".$activeNavAd['schedule']."'>
        <a href='".PRONAME."/admin/schedule'>QUẢN LÝ LỊCH CHIẾU</a>
    </div>
    <div class='nav-ad__item ".$activeNavAd['showtime']."'>
        <a href='".PRONAME."/admin/showtime'>QUẢN LÝ SUẤT CHIẾU</a>
    </div>
</div>
";

?>

