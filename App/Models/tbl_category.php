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
        private $InnerCate = "SELECT tbl_category.* FROM tbl_category INNER JOIN tbl_film ON tbl_film.id_category= tbl_category.id";
        function GetCategory($cond='1',$query=''){
            $sql = null;
            if($query == '') $query = "SELECT * FROM tbl_category WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new category($item['id'],$item['name']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
        function InnerCate(){
            $sql = null;
            createConnection($sql);
            $result = executeQuery($sql,$this->InnerCate);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new category($item['id'],$item['name']);
            }
            releaseMemory($sql,$result);
            return $class;
        }
    }
?>