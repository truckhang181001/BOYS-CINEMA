<?php
    require_once __DIR__."/db_module.php";
    class tbl_film{
        function GetFilm($field='*',$cond=''){
            if($cond != '') $cond= ' WHERE '.$cond;
            $sql = null;
            createConnection($sql);
            return executeQuery($sql,'SELECT '.$field.' FROM tbl_film');
            mysqli_close($sql);
        }
    }
?>