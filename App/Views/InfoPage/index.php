<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOY CINEMA</title>
    <link rel="stylesheet" href="/BOYSCINEMA/public/css/InfoPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script type="text/javascript" src="/BOYSCINEMA/public/js/InfoPage/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    .info-page--effect {
        cursor: pointer;
        transition: all 0.4s ease;
    }       
    .info-page--effect:hover {
        opacity: 0.5;
        transform: translateY(-5px);
    } 
    .fa-star {
        color: #f1481f;
        transition: all 0.4s;
        cursor: pointer;
    }
        
    .fa-star:active {
        opacity: 1;
        color: #f1481f;
    }
              
    .fa-user-circle {
        cursor: pointer;
        transition: opacity 0.4s ease;
    }
        
    .fa-user-circle:hover {
        opacity: 0.5;
    }
    .info-page {
        width: 100%;
        height: 200vh;
        background: #000C20;
    }
    body{
        background: #000C20;
    }
</style>
<body>
    <div class="info-page">
        <div class="info-page__header">
        <?php
            include_once("./App/Views/InfoPage/header.php"); 
        ?>
        </div>
      <div class="info-page__img-group">
        <?php
            include_once("./App/Views/InfoPage/img-group.php"); 
        ?>
      </div>
        <div class="info-page__tab-content"> 
            <?php
            include_once("./App/Views/InfoPage/tab-content.php"); 
        ?></div>
        <div class="">
            <?php
                include_once("./App/Views/HomePage/carousel.php"); 
            ?>
        </div>
       
    </div>
</body>
</html>