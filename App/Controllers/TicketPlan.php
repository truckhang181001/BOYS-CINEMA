<?php
    class TicketPlan extends Controller{
        function __construct()
        {
            if(isset($_GET['date'])){
                // Lấy lịch chiếu từ $_GET
                $time = DateTime::createFromFormat('d/m/Y',$_GET['date'])->format('Y-m-d');
                $dataSche = $this->getModel("tbl_schedule")->GetSchedule("date='".$time."'");
            }
            else{
                // Mặc định là lịch chiếu ngày đầu tiên
                $nowDate = date("Y/m/d");
                $dataSche = $this->getModel("tbl_schedule")->GetSchedule("date='".$nowDate."'");
            }
            $this->getView("TicketPlanPage",$dataSche);
        }
    }
?>