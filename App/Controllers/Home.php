<?php
class Home extends controller{
    function __construct()
    {
        $tblSche = $this->GetModel("tbl_schedule");
        $dataSche = $tblSche->GetSchedule("date='2021/10/15'");
        $dataFilm=[];
        foreach($dataSche as $item){
            $dataFilm[]=$item->GetFilm();
        }
        $this->getView("HomePage",$dataFilm);
    }
}
?>