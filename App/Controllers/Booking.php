<?php
    class Booking extends Controller{
        function phim(){
            $this->getView("TicketPlanPage");
        }
        function tatca(){
            $Schedule = $this->getModel("tbl_schedule");
            if(isset($_GET['date'])){
                $time = DateTime::createFromFormat('d/m/Y',$_GET['date'])->format('Y-m-d');
                $dataSche = $Schedule->GetSchedule("date='".$time."'");
            }
            else{
                $nowDate = date("Y/m/d");
                $dataSche = $Schedule->GetSchedule("date='".$nowDate."'");
            }
            $this->getView("BookingPage",$dataSche);
        }
    }
?>