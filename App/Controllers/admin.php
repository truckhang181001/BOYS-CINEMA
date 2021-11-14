<?php
    class admin extends Controller{
        function dashboard(){
            require_once "./admin/controllers/dashboard.php";
        }
        function film($url="default"){
            require_once "./admin/controllers/film.php";
        }
    }
?>