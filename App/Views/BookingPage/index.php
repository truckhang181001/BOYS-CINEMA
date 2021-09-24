<head>
    <link rel="stylesheet" href="<?php echo PRONAME?>/public/css/BookingPage.css">
    <title>BOYSCINEMA | Đặt vé</title>
</head>
<body>
    <section class="booking-page">
        <div class="booking-page__banner">
            <img src="<?php echo PRONAME?>/public/img/BuyTicket.jpg" alt="">
        </div>
        <form method="get" class="booking-page__form">
            <div class="booking-page__form__filter">
                <div class="booking-page__form__filter__row --start">
                    <div class="city-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <select class="filter-item__form" name="city">
                            <option selected>Chọn thành phố</option>
                            <option value="1">TP.HCM</option>
                            <option value="2">Hà Nội</option>
                            <option value="3">Kiên Giang</option>
                            <option value="2">Nha Trang</option>
                        </select>
                    </div>
                    <div class="theater-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="fas fa-film"></i>
                        </div>
                        <select class="filter-item__form" name="theater">
                            <option selected>Chọn rạp</option>
                            <option value="1">06 Sư Vạn Hạnh, Q10</option>
                            <option value="2">256 Pasteur</option>
                        </select>
                    </div>
                </div>
                <div class="booking-page__form__filter__row --mid">
                    <div class="theater-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="fas fa-film"></i>
                        </div>
                        <select class="filter-item__form" name="film">
                            <option selected>Chọn phim</option>
                            <option value="1">Shang-chi cuộc chiến không hồi kết</option>
                            <option value="2">Hai Phượng</option>
                        </select>
                    </div>
                    <div class="method-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="fas fa-vr-cardboard"></i>
                        </div>
                        <select class="filter-item__form" name="experience">
                            <option selected>Hình thức</option>
                            <option value="1">2D</option>
                            <option value="2">3D</option>
                        </select>
                    </div>
                </div>
                <div class="booking-page__form__filter__row --end">
                    <div class="date-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="fas fa-film"></i>
                        </div>
                        <select class="filter-item__form" name="date">
                            <option selected>Chọn ngày</option>
                            <option value="1">21/10/2021</option>
                            <option value="2">22/10/2021</option>
                        </select>
                    </div>
                    <div class="time-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <select class="filter-item__form" name="time">
                            <option selected>Chọn suất chiếu</option>
                            <option value="1">7:00</option>
                            <option value="2">7:30</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="booking-page__form__btn">
                <input type="submit" class="btn" value="Tìm ghế">
            </div>   
        </form>
        <div class="booking-page__seat">
            <?php
                $alphabet = range("A","Z");
                for($i=0; $i <10; $i++){
                    echo "<div class='booking-page__seat__row'>";
                    for($j=1; $j <=10; $j++){
                        echo "<div class='seat'>".$alphabet[$i],$j."</div>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
        <div class="booking-page__checkout">
            <a class="btn" href="<?php echo PRONAME?>/thanh-toan">THANH TOÁN</a>
        </div>
    </section>
</body>
</html>