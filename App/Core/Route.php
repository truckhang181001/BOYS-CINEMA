<?php
    class Route{
        protected $route = [
            "trang-chu"=>"Home",
            "thong-tin"=>"Info",
            "tim-kiem"=>"Search",
            "dat-ve"=>"Booking",
            "thanh-toan"=>"Checkout",
            "dang-nhap"=>"Login",
            "dang-ky"=>"Signup",
            "ERROR-404"=>"Error404"
        ];
        // protected $routeAct = [
        //     "timkiem"=>[
        //         "tatca"=>"",
        //         "dangchieu"=>"",
        //         "sapchieu"=>""
        //     ]
        // ];
        protected $controller = "Home";
        protected $action = "";
        protected $param = [];

        function __construct()
        {
            //Controller
            $url = $this->UrlProcess();
            if(isset($url[0]) && file_exists("./App/Controllers/".$this->route[$url[0]].".php")){
                $this->controller = $this->route[$url[0]];
                unset($url[0]);
            }
            require_once "./App/Controllers/".$this->controller.".php";
            $this->controller = new $this->controller;
            //Action
            if(isset($url[1]))
            {
                if(method_exists($this->controller,$url[1])){
                    $this->action = $url[1];
                    unset($url[1]);
                    //Xu li Param
                    $this->param = $url?array_values($url):[];
                    call_user_func_array([$this->controller,$this->action],$this->param);        
                }
            }

        }
        function UrlProcess(){
            if(isset($_GET["url"])){
                return explode("/",filter_var(trim($_GET["url"],"/")));
            }
        }
    }
?>