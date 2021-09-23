<head>
    <link rel="stylesheet" href="<?php echo PRONAME?>/public/css/BookingPage.css">
    <title>BOYSCINEMA | Đặt vé</title>
</head>
<body>
    <section class="booking-page">
        <div class="booking-page__banner">
            <img src="<?php echo PRONAME?>/public/img/BuyTicket.jpg" alt="">
        </div>
        <div class="booking-page__filter">
            <div class="booking-page__filter__row --start">
                <div class="city-sort filter-item">
                    <div class="filter-item__icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <select class="filter-item__text form-select">
                        <option selected>Thành phố</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="filter-item__arr-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="theater-sort filter-item">
                    <div class="filter-item__icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <div class="filter-item__text">
                        Rạp
                    </div>
                    <div class="filter-item__arr-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
            <div class="booking-page__filter__row --mid">
                <div class="theater-sort filter-item">
                    <div class="filter-item__icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <div class="filter-item__text">
                        Phim
                    </div>
                    <div class="filter-item__arr-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="method-sort filter-item">
                    <div class="filter-item__icon">
                        <i class="fas fa-vr-cardboard"></i>
                    </div>
                    <div class="filter-item__text">
                        Hình thức
                    </div>
                    <div class="filter-item__arr-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>
            <div class="booking-page__filter__row --end">
                <div class="date-sort filter-item">
                    <div class="filter-item__icon">
                        <i class="fas fa-film"></i>
                    </div>
                    <div class="filter-item__text">
                        Ngày
                    </div>
                    <div class="filter-item__arr-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
                <div class="time-sort filter-item">
                    <div class="filter-item__icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="filter-item__text">
                        Suất chiếu
                    </div>
                    <div class="filter-item__arr-icon">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </div>
            </div>    
        </div>
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