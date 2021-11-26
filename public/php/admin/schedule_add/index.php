<?php
$checkRand = rand(10,100000);
$controller = new controller();
$tbl_schedule = $controller->getModel("tbl_schedule");

if (isset($_POST['addItemSchedule']) && $_POST['addItemSchedule']=="add") {
    insertSchedule($tbl_schedule);
    header("Location: ".CURLINK);
    exit;
}
function insertSchedule($tbl_schedule){
    $id_film = $_POST['id_film'];
    $id_theater = $_POST['id_theater'];
    $id_room = $_POST['id_room'];
    $date = $_POST['date'];
    
    $id_schedule = $tbl_schedule->insertSchedule($id_film, $id_theater, $id_room, $date);
   
}




    
