<?php
    class Booking extends Controller{
        function phim($id_film){
            $data = $this->getModel("tbl_schedule");
            $this->getView("BookingPage",$data->getSchedule("id_film = ".$id_film));
        }
        function tatca(){
            $data = $this->getModel("tbl_schedule");
            $this->getView("BookingPage",$data->getSchedule());
        }
    }
?>