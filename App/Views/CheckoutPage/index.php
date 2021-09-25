<head>
    <link rel="stylesheet" href="<?php echo PRONAME ?>/public/css/CheckoutPage.css">
    <title>Trang thanh toán</title>
    
</head>
<body>
    <div class="container" style="background-color:#000C20">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-12 col-md-10">
                <?php include_once "./App/Views/CheckoutPage/Info.php" ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-12 col-md-10">
                <?php include_once "./App/Views/CheckoutPage/Discount.php" ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-12 col-md-10">
                <?php include_once "./App/Views/CheckoutPage/Method.php" ?>
            </div>
        </div>
    </div>
</body>
</html>