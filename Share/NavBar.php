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
    "Planing" => "",
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
        case 'lich-chieu': {
                $active["Planing"] = "nav-item__active";
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
            <a class='nav__home nav-item__text' href='/BOYSCINEMA'>Trang chủ</a>
            <div class='" . $active["Home"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__film nav-item__text' href='/BOYSCINEMA/tim-kiem/PhimDangChieu'>Phim</a>
            <div class='" . $active["Search"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__ticket-plan nav-item__text' href='/BOYSCINEMA'>Lịch chiếu</a>
            <div class='" . $active["Planing"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__promo nav-item__text' href='/BOYSCINEMA'>Khuyến mãi</a>
            <div class='" . $active["Promo"] . "'></div>
        </div>
        <div class='nav-item'>
            <a class='nav__contact nav-item__text' href='/BOYSCINEMA'>Liên hệ</a>
            <div class='" . $active["Contact"] . "'></div>
        </div>
        <a class='nav__sign-in' href='/BOYSCINEMA/dang-nhap'>Đăng nhập</a>
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