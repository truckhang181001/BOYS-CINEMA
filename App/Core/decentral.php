<?php
if(in_array($this->controller,$this->req)){
    $check=true;
    switch($this->controller){
        case "admin":{
            if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                $email = $_SESSION['email'];
                $pass = $_SESSION['password'];
                if($this->getModel("tbl_admin_acc")->getAdmin("email='$email' AND password='$pass'") == null) $check=false;
            }
            break;
        }
        default:{
            if(isset($_SESSION['email']) && isset($_SESSION['password'])){
                $email = $_SESSION['email'];
                $pass = $_SESSION['password'];
                if($this->getModel("tbl_customer")->getCustomer("email='$email' AND password='$pass'") == null) $check=false;
            }
            break;
        }
    }
    if(!$check){
        header("Location: ".DOMAIN.PRONAME."/dang-nhap");
    }
}