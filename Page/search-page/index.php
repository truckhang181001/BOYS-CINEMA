<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="./sub-searchbox.css">
    <link rel="stylesheet" href="./searchbox.css">
    <link rel="stylesheet" href="./sub-filter.css">
    <link rel="stylesheet" href="./filter.css">
    <link rel="stylesheet" href="./card.css">
    <link rel="stylesheet" href="./pagination.css">
    <title>Trang tìm kiếm</title>
</head>
<body>
    <div class="container-fluid" style="background-color:#000C20">

        <div class="row searchbox-and-sub-searchbox">
            <div class="col-12"> 
                <?php include_once "./searchbox.php" ?>
            </div>
            <div class="col-12">
                <?php include_once "./sub-searchbox.php" ?>
            </div> 
        </div>

        <div class="row main-body">
            <div class="col-md-1"></div>
            <div class="col-3 col-md-2">
                <?php include_once "./filter.php" ?>
            </div>
            <div class="col-9 col-md-8" style="padding-left:0px">
                <?php include_once "./sub-filter.php" ?>
                <br/>
                <?php include_once "./card.php" ?>
                <br/>
                <?php include_once "./pagination.php" ?>
            </div>
        </div>
    </div>
</body>
</html>