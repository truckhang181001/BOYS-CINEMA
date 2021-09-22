<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOY CINEMA</title>
    <link rel="stylesheet" href="./header.css">
    <link rel="stylesheet" href="./img-group.css">
    <link rel="stylesheet" href="./tab-content.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
    *{
        margin: 0 !important;
        padding: 0 !important;
    }
    .info-page--effect {
        cursor: pointer;
        transition: all 0.4s ease !important;
    }       
    .info-page--effect:hover {
        opacity: 0.5;
        transform: translateY(-3px);
    } 
    .fa-star {
        color: #f1481f;
    }
        
    .fa-star:active {
        color: #FFFFFF;
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
        height: 300vh;
        background: #000C20;
    }
</style>
<body>
    <div class="container-fluid info-page">
        <div class="row">
        <?php
            include_once("./header.php"); 
        ?>
        </div>
      <div class="row info-page__img-group">
        <?php
            include_once("./img-group.php"); 
        ?>
      </div>
        <div class="row info-page__tab-content"> 
            <?php
            include_once("./tab-content.php"); 
        ?></div>
    </div>
</body>
</html>