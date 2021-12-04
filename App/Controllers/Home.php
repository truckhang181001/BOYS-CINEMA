<?php
class home extends controller{
    function __construct()
    {
        $tblSche = $this->GetModel("tbl_schedule");
        $tblFilm = $this->getModel("tbl_film");
        $dataSche = $tblSche->GetSchedule("date='".date("Y/m/d")."'");
        $dataFtu = $tblFilm->getFilm("release_time > '".date("Y/m/d")."'");
        $dataFilm=[];
        $dataFilmFtu=[];
        if($dataSche != null){
            foreach($dataSche as $item){
                $dataFilm[]=$item->GetFilm();
            }
        }
        if($dataFtu != null){
            foreach($dataFtu as $item){
                $dataFilmFtu[]=$item;
            }
        }
        $this->getView("home_page",[
            'film'=>$dataFilm,
            'filmFtu'=>$dataFilmFtu
        ]);
    }
}
?>