<?php
    if(isset($_POST['addShowtime'])){
        //Time variable
        $check = true;
        $sTime = $_POST['start_time'];
        $fTime = (int)$data['item_film']->time;
        $eTime = date("H:i",strtotime($sTime)+$fTime*60);
        foreach($data['showtime'] as $item){
            if(($sTime >= $item->start_time && $sTime <= $item->end_time) 
            || ($eTime >= $item->start_time && $eTime <= $item->end_time)){
                echo "<script>alert('Suất chiếu bị trùng. Vui lòng kiểm tra lại')</script>";
                $check = false;
                break;
            }
        }
        //Insert Showtime
        if($check){
            $this->getModel('tbl_showtime')->insertShowtime($data['schedule']->id,$_POST['type'],$sTime,$eTime);
            header("Location: ".CURLINK);
            exit;
        }
    }
?>
        
