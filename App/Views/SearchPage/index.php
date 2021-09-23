<head>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/SearchPage.css">
    <title>Trang tìm kiếm</title>
</head>
<body>
    <div class="container-fluid" style="background-color:#000C20; padding: 100px 0;">
        <div class="row searchbox-and-sub-searchbox">
            <div class="col-12"> 
                <i class="fas fa-search"></i>
                <?php include_once "./App/Views/SearchPage/searchbox.php" ?>
            </div>
            <div class="col-12">
                <?php include_once "./App/Views/SearchPage/sub-searchbox.php" ?>
            </div> 
        </div>

        <div class="row main-body">
            <div class="col-md-1"></div>
            <div class="col-3 col-md-2">
                <?php include_once "./App/Views/SearchPage/filter.php" ?>
            </div>
            <div class="col-9 col-md-8" style="padding-left:0px">
                <?php include_once "./App/Views/SearchPage/sub-filter.php" ?>
                <br/>
                <?php include_once "./App/Views/SearchPage/card.php" ?>
                <br/>
                <?php include_once "./App/Views/SearchPage/pagination.php" ?>
            </div>
        </div>
    </div>
</body>
</html>