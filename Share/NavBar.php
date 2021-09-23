<?php
function UrlProcess()
{
    if (isset($_GET["url"])) {
        return explode("/", filter_var(trim($_GET["url"], "/")));
    }
}

$url = UrlProcess();
$active = [
    "Home" => "",
    "Search" => "",
    "Ticket" => "",
    "Promo" => "",
    "Contact" => ""
];
if (isset($url[0])) {
    switch ($url[0]) {
        case 'trang-chu': {
                $active["Home"] = "nav-item__active";
                break;
            }
        case 'tim-kiem': {
                $active["Search"] = "nav-item__active";
                break;
            }
        case 'dat-ve': {
                $active["Ticket"] = "nav-item__active";
                break;
            }
        case 'khuyen-mai': {
                $active["Promo"] = "nav-item__active";
                break;
            }
        case 'lien-he': {
                $active["Contact"] = "nav-item__active";
                break;
            }
    }
} else {
    $active["Home"] = "nav-item__active";
}

echo "<div class='nav-container'>
    <div class='nav' id='nav-main'>    
        <div class='nav-item'>
            <a class='nav__home nav-item__text' href='".PRONAME."'>Trang chủ</a>
            <div class='" . $active["Home"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__film nav-item__text' href='".PRONAME."/tim-kiem/PhimDangChieu'>Phim</a>
            <div class='" . $active["Search"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__ticket-plan nav-item__text' href='".PRONAME."/dat-ve'>Đặt vé</a>
            <div class='" . $active["Ticket"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__promo nav-item__text' href='".PRONAME."'>Khuyến mãi</a>
            <div class='" . $active["Promo"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__contact nav-item__text' href='".PRONAME."/lien-he'>Liên hệ</a>
            <div class='" . $active["Contact"] . "'></div>
        </div>
        <a class='nav__sign-in' href='".PRONAME."/dang-nhap'>Đăng nhập</a>
    </div>
    <i class='fas fa-bars nav-icon' id='nav-click'></i>
</div>";
?>
<script>
    $(document).ready(function() {
        $("#nav-click").click(function() {
            $("#nav-main").slideToggle();
        });
    });
</script>