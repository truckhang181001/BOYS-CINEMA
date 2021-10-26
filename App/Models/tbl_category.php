<?php
    require_once __DIR__."/db_module.php";
    class category{
        public $id;
        public $name;
        
        function __construct($id, $name)
        {
            $this->id=$id;
            $this->name=$name;
        }
    }
    class tbl_category{
        function GetCategory($cond='1'){
            $sql = null;
            $class = null;
            $query = "SELECT * FROM tbl_category WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new category($item['id'],$item['name']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
    }
?>