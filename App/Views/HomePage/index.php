<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/HomePage.css">
</head>

<body>
    <div class="container-fluid">
        <?php include_once "./App/Views/HomePage/banner-ads.php" ?>
    </div>
    <div class="container">
        <?php include_once "./App/Views/HomePage/search.php" ?>
        <div class="film-slide">
            <div class="row"><?php include_once "./App/Views/HomePage/title.php" ?></div>
            <?php include_once "./App/Views/HomePage/carousel.php" ?>
        </div>
        <div class="event-slide">
            <?php include_once "./App/Views/HomePage/event-ads.php" ?>
        </div>
    </div>
    <script src="<?php echo PRONAME ?>/public/js/HomePage/script.js"></script>
</body>
</html>