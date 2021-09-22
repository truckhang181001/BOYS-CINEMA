<?php
    class controller{
        function getModel($model){
            require_once "./App/Models/".$model.".php";
            return new $model;
        }
        function getView($view,$data=[]){
            require_once "./App/Views/".$view."/index.php";
        }
    }
?>