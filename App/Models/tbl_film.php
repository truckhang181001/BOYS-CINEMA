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
        public function GetCate(){
            require_once __DIR__."/tbl_category.php";
            $cate = new tbl_category();
            return $cate->GetCategory('id='.$this->id)[0]->name;
        }
    }
    class tbl_film{
        function GetFilm($cond='1'){
            $sql = null;
            $class = null;
            $query = "SELECT * FROM tbl_film WHERE ".$cond;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($item = mysqli_fetch_assoc($result)){
                $class[] = new film($item['id'],$item['id_category'],$item['name'],$item['desc'],$item['release'],$item["time"],$item["type"]);
            }
            releaseMemory($sql,$result);
            return $class;
        }
        function IssetFilm($id_film){
            $sql = null;
            $query = "SELECT id FROM tbl_film WHERE id=".$id_film;
            createConnection($sql);
            $result = executeQuery($sql,$query);
            $i=0;
            while($item = mysqli_fetch_assoc($result)){
                $i+=1;
            }
            releaseMemory($sql,$result);
            return $i==1?true:false;
        }
    }
