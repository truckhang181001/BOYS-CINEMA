<?php
require_once __DIR__ . "/db_module.php";
class showtime
{
    public $id;
    public $id_schedule;
    public $type;
    public $start_time;
    public $end_time;

    function __construct($id, $id_schedule, $type, $start_time, $end_time)
    {
        $this->id = $id;
        $this->id_schedule = $id_schedule;
        $this->type = $type;
        $this->start_time = substr($start_time,0,5);
        $this->end_time = substr($end_time,0,5);
    }
}

class tbl_showtime{
    function GetShowTime($cond='1'){
        $sql = null;
        $class=null;
        $query = "SELECT * FROM tbl_showtime WHERE ".$cond;
        createConnection($sql);
        $result = executeQuery($sql,$query);
        while($item = mysqli_fetch_assoc($result)){
            $class[] = new showtime($item['id'],$item['id_schedule'],$item['type'],$item['start_time'],$item['end_time']);
        }
        releaseMemory($sql,$result);
        return $class;
    }
}
?>