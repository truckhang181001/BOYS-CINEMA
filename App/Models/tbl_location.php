<?php
    require_once __DIR__."/db_module.php";
    class tbl_location{
        protected $id;
        protected $name;

        function __construct($id,$name)
        {
            $this->id=$id;
            $this->name=$name;
        }
    }
    class tbl_location_db{
        function getLocation($cond=1){
            $locationClass=[];
            $sql = null;
            $query = "SELECT * FROM tbl_location WHERE ".$cond."";
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($loc = mysqli_fetch_assoc($result)){
                $locationClass[] = new tbl_location($loc['id'],$loc['name']);
            }
            mysqli_close($sql);
            releaseMemory($result);
            return $locationClass;
        }
    }
?>