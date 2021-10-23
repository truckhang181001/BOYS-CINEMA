<?php
class Booking extends Controller
{
    function __construct()
    {
        if (isset($_GET['schedule']) && isset($_GET['showtime'])) {
            $dataSchedule = $this->getModel("tbl_schedule")->GetSchedule("id=".$_GET['schedule'])[0];
            if($dataSchedule != null){
                if($dataSchedule->GetShowTime('AND id='.$_GET['showtime']) != null){
                    $this->getView("BookingPage", []);
                }
                else{
                    $this->getView("Error404");
                }
            }
            else{
                $this->getView("Error404");
            }
        }
        else{
            $this->getView("Error404");
        }
    }
}
