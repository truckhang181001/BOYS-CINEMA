<?php
    class admin extends Controller{
        function dashboard(){
            require_once "./admin/controllers/dashboard.php";
        }
        function film($url="default"){
            require_once "./admin/controllers/film.php";
        }
        function customer($url="default"){
            require_once "./admin/controllers/customer.php";
        }
        function theater($url="default"){
            require_once "./admin/controllers/theater.php";
        }
    }
?>