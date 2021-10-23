<head>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/BookingPage.css">
    <title>BOYSCINEMA | Đặt vé</title>
</head>

<body>
    <section class="booking-page">
        <div class="booking-page__banner">
            <img src="<?php echo PRONAME ?>/public/img/BuyTicket.jpg" alt="">
        </div>
        <form method="get" class="booking-page__form" action="">
            <div class="booking-page__form__filter">
                <div class="booking-page__form__filter__row --start">
                    <?php require_once __DIR__ . "/filter_date.php" ?>
                    <div class="theater-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="fas fa-film"></i>
                        </div>
                        <select class="filter-item__form" name="film">
                            <option selected disabled>Chọn phim</option>
                            <?php
                                foreach($data as $item){
                                    echo "<option>".$item->GetFilm()->name."</option>";
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="booking-page__form__filter__row --mid">
                    <div class="city-sort filter-item">
                        <div class="filter-item__icon">
                            <img src="http://pixner.net/boleto/demo/assets/images/ticket/city.png" alt="ticket">
                        </div>
                        <select class="filter-item__form" name="city" onchange="this.form.submit()">
                            <option selected disabled>Chọn thành phố</option>
                        </select>
                    </div>
                    <div class="theater-sort filter-item">
                        <div class="filter-item__icon">
                            <img src="http://pixner.net/boleto/demo/assets/images/ticket/cinema.png" alt="ticket">
                        </div>
                        <select class="filter-item__form" name="theater">
                            <option selected disabled>Chọn rạp</option>
                        </select>
                    </div>


                </div>
                <div class="booking-page__form__filter__row --end">
                    <div class="method-sort filter-item">
                        <div class="filter-item__icon">
                            <img src="http://pixner.net/boleto/demo/assets/images/ticket/exp.png" alt="icon">
                        </div>
                        <select class="filter-item__form" name="experience">
                            <option selected disabled>Hình thức</option>
                        </select>
                    </div>
                    <div class="time-sort filter-item">
                        <div class="filter-item__icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <select class="filter-item__form" name="time">
                            <option selected disabled>Chọn suất chiếu</option>
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
            $alphabet = range("A", "Z");
            for ($i = 0; $i < 10; $i++) {
                echo "<div class='booking-page__seat__row'>";
                for ($j = 1; $j <= 10; $j++) {
                    echo "<div class='seat'>" . $alphabet[$i], $j . "</div>";
                }
                echo "</div>";
            }
            ?>
        </div>
        <div class="booking-page__checkout">
            <a class="btn" href="<?php echo PRONAME ?>/thanh-toan">THANH TOÁN</a>
        </div>
    </section>
</body>

</html>