<head>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/SearchPage.css">
    <title>Trang tìm kiếm</title>
</head>
<body>
    <div class="container" style="background-color:#000C20; padding: 100px 0;">
        <div class="row searchbox-and-sub-searchbox">
            <div class="col-12"> 
                <?php include_once "./App/Views/SearchPage/searchbox.php" ?>
            </div>
            <div class="col-12">
                <?php include_once "./App/Views/SearchPage/sub-searchbox.php" ?>
            </div> 
        </div>

        <div class="row main-body">
            <div class="col-sm-1"></div>
            <div class="col-sm-2" id="hide-filter">
                <?php include_once "./App/Views/SearchPage/filter.php" ?>
            </div>
            <div class="col-12 col-sm-8" id="sub-filter-card">
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