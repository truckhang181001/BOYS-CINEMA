<?php
    require_once __DIR__."/db_module.php";
    class tbl_schedule{
        function GetCity(){
            $sql = null;
            $query = "SELECT tbl_location.name, tbl_location.id FROM tbl_schedule INNER JOIN tbl_theater ON tbl_schedule.id_theater = tbl_theater.id INNER JOIN tbl_location ON tbl_theater.id_location = tbl_location.id";
            createConnection($sql);
            return executeQuery($sql,$query);
            mysqli_close($sql);
        }
    }
?>