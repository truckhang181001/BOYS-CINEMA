<?php
require_once __DIR__ . "/db_module.php";
class room
{
    public $id;
    public $id_theater;
    public $name;
    public $seat;
    function __construct($id, $id_theater, $name)
    {
        $this->id = $id;
        $this->id_theater = $id_theater;
        $this->name = $name;
        
    }
}
class tbl_room
{
    function getRoom($cond = '1')
    {
        $sql = null;
        $class = null;
        $query = "SELECT * FROM tbl_room WHERE " . $cond;
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $class[] = new room($item['id'],$item['id_theater'],$item['name']);
        }
        releaseMemory($sql, $result);
        return $class;
    }
}
