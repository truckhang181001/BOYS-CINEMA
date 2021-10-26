<head>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/BookingPage.css">
    <title>BOYSCINEMA | Đặt vé</title>
</head>

<body>
    <section class="booking-page">
        <?php require_once __DIR__."/banner.php"?>
        <?php require_once __DIR__."/filter.php"?>
        <div class="booking-page__seat">
            <?php require_once __DIR__."/seat.php"?>
        </div>
        <div class="booking-page__checkout">
            <a class="btn" href="<?php echo PRONAME ?>/thanh-toan">THANH TOÁN</a>
        </div>
    </section>
</body>

</html>