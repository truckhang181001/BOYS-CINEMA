<?php

    class checkout extends Controller{
        function __construct()
        {
            if(isset($_GET['seat']) && isset($_GET['showtime'])){
                foreach($_GET['seat'] as $item){
                    if($this->getModel("tbl_receipt")->getReceipt("id_showtime=".$_GET['showtime']." AND id_seat=".$item) == null){
                        $checkSeat= $this->getModel("tbl_seat")->getSeat("id=".$item)[0];
                        if($checkSeat->type) $seatVip[]=$checkSeat;
                        else $seatNormal[]=$checkSeat;
                    }
                }
                // $dataPrice = $this->
                $dataShowtime = $this->getModel("tbl_showtime")->getShowtime("id=".$_GET['showtime'])[0];
                $dataSchedule = $dataShowtime->getSchedule();
                $this->getView('checkout_page',[
                    "seat_vip"=>$seatVip,
                    "seat_normal"=>$seatNormal,
                    "showtime"=>$dataShowtime,
                    "schedule"=>$dataSchedule
                ]);
            }
        }
    }

?>