<?php
switch ($url) {
    case "edit": {
            if (isset($_GET['id'])) {
            };
            break;
        }
    case "add": {
            $dataLocation = $this->getModel("tbl_location")->GetLocation();
            $this->getViewAd("theater_add",[
                "location"=> $dataLocation
            ]);
            break;
        }
    default:
        theaterDefault($this);
}

function theaterDefault($subClass)
{
    $dataTheater = $subClass->getModel("tbl_theater")->getTheater();
    $subClass->getViewAd("theater", $dataTheater);
}
