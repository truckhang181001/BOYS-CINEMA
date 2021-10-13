<?php
    require_once __DIR__."/db_module.php";
    class film{
        public $id;
        public $id_category;
        public $name;
        public $release;
        public $time;
        public $desc;
        public $type;

        function __construct($id, $id_category, $name, $desc, $release, $time, $type)
        {
            $this->id=$id;
            $this->id_category=$id_category;
            $this->name=$name;
            $this->desc=$desc;
            $this->release=$release;
            $this->time=$time;
            $this->type=$type;
        }
    }
    class tbl_film{
        function GetFilm($field='*',$cond='1'){
            $sql = null;
            $query = "SELECT ".$field." FROM tbl_film WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $filmClass[] = new film($item['id'],$item['id_category'],$item['name'],$item['desc'],$item['release'],$item["time"],$item["type"]);
            }
            releaseMemory($sql,$result);
            return $filmClass;
        }
    }
?>