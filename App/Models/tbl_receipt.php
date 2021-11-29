<?php
class receipt
{
    public $id;
    public $id_customer;
    public $id_showtime;
    public $id_seat;
    public $status;
    public $date;
    public $id_transition;
}
class tbl_receipt
{
    function getSeat($id_showtime)
    {
        $class = [];
        $sql = null;
        $query = "SELECT id_seat FROM tbl_receipt WHERE id_showtime=" . $id_showtime;
        createConnection($sql);
        $result = executeQuery($sql, $query);
        while ($item = mysqli_fetch_assoc($result)) {
            $class[] = $item['id_seat'];
        }
        releaseMemory($sql, $result);
        return $class;
    }
}
