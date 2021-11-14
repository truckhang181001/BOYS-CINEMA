<?php
class booking extends Controller
{
    function __construct()
    {
        if (isset($_GET['schedule']) && isset($_GET['showtime'])) {
            $dataSchedule = $this->getModel("tbl_schedule")->GetSchedule("id=".$_GET['schedule'])[0];
            if($dataSchedule != null){
                if($dataSchedule->GetShowTime('AND id='.$_GET['showtime']) != null){
                    $this->getView("booking_page", []);
                }
                else{
                    $this->getView("error404");
                }
            }
            else{
                $this->getView("error404");
            }
        }
        else{
            $this->getView("error404");
        }
    }
}
