    <div class="container-fluid">
        <?php include_once __DIR__ . "/banner-ads.php" ?>
    </div>
    <div class="container">
        <?php include_once __DIR__ . "/search.php" ?>
        <div class="film-slide">
            <div class="row"><?php include_once __DIR__ . "/title.php" ?></div>
            <?php include_once __DIR__ . "/carousel.php" ?>
        </div>
        <div class="event-slide">
            <?php include_once __DIR__ . "/event-ads.php" ?>
        </div>
    </div>
    <script src="<?php echo PRONAME ?>/public/js/app/home-page/script.js"></script>