<?php
    class Booking extends Controller{
        function __construct()
        {
            $data = $this->getModel("tbl_schedule");
            $this->getView("BookingPage",$data->GetCity());
        }
    }
?>