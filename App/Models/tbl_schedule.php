<?php
    require_once __DIR__."/db_module.php";
    class schedule{
        public $id;
        public $id_film;
        public $id_theater;
        public $id_room;
        public $date;

        function __construct($id,$id_film,$id_theater,$id_room,$date)
        {
            $this->id=$id;
            $this->id_film=$id_film;
            $this->id_theater=$id_theater;
            $this->id_room=$id_room;
            $this->date=$date;
        }
        function GetFilm(){
            require_once __DIR__."/tbl_film.php";
            $dataFilm = new tbl_film();
            return $dataFilm->GetFilm('id='.$this->id_film)[0];
        }
        function GetShowTime(){
            require_once __DIR__."/tbl_showtime.php";
            $dataFilm = new tbl_showtime();
            return $dataFilm->GetShowTime('id_schedule='.$this->id);
        }
        function GetTheater(){
            require_once "./tbl_theater.php";
            $dataTheater = new tbl_theater();
            return $dataTheater->GetTheater();
        }
    }
    class tbl_schedule{
        function GetSchedule($cond=1){
            $scheClass=[];
            $sql = null;
            $query = "SELECT * FROM tbl_schedule WHERE ".$cond."";
            createConnection($sql);
            $result = executeQuery($sql,$query);
            while($sche = mysqli_fetch_assoc($result)){
                $scheClass[] = new schedule($sche['id'],$sche['id_film'],$sche['id_theater'],$sche['id_room'],$sche['date']);
            }
            releaseMemory($sql,$result);
            return $scheClass;
        }
    }
?>