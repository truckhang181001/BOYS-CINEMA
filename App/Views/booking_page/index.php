    <section class="booking-page">
        <?php require_once __DIR__ . "/banner.php" ?>
        <?php require_once __DIR__ . "/filter.php" ?>
        <div class="booking-page__seat">
            <div class="seat-container">
                <?php require_once __DIR__ . "/seat.php" ?>
            </div>
        </div>
        <div class="booking-page__checkout">
            <a class="btnf" href="<?php echo PRONAME ?>/thanh-toan">THANH TOÁN</a>
        </div>
    </section>