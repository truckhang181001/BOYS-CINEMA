<?php
switch ($url) {
    case "edit": {
            if (isset($_GET['id'])) {
            };
            break;
        }
    case "add": {
            $dataFilm = $this->getModel("tbl_film")->GetFilm();
            $dataTheater = $this->getModel("tbl_theater")->getTheater();
            $dataRoom = $this->getModel("tbl_room")->getRoom();
            $this->getViewAd("theater_add",[
                "film"=> $dataFilm,
                "theater"=>$dataTheater,
                "room"=>$dataRoom
            ]);
            break;
        }
    default:
        theaterDefault($this);
}

function scheduleDefault($subClass)
{
    $dataSchedule = $subClass->getModel("tbl_schedule")->GetSchedule();
    $subClass->getViewAd("schedule", $dataSchedule);
}