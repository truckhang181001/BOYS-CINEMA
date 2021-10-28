<?php
    class Route{
        public $route = [
            "trang-chu"=>["Home","Trang chủ"],
            "thong-tin"=>["Info","Thông tin"],
            "tim-kiem"=>["Search","Tìm kiếm"],
            "lich-chieu"=>["TicketPlan","Lịch chiếu"],
            "dat-ve"=>["Booking","Đặt vé"],
            "thanh-toan"=>["Checkout","Thanh toán"],
            "dang-nhap"=>["Login","Đăng nhập"],
            "dang-ky"=>["Signup","Đăng ký"],
            "ERROR-404"=>["Error404","Lỗi"],
            "lien-he" =>["Contact","Liên hệ"],
            "admin"=>["admin","Quản lý"]
        ];
        protected $controller = "Home";
        protected $action = "";
        protected $param = [];

        function routeDir()
        {
            //Controller
            $url = $this->UrlProcess();
            if(isset($url[0]) && file_exists("./App/Controllers/".$this->route[$url[0]][0].".php")){
                $this->controller = $this->route[$url[0]][0];
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