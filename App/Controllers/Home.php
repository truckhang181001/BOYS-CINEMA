<?php
class Home extends controller{
    function __construct()
    {
        $dataSche = $this->GetModel("tbl_schedule");
        $dataFilm = $this->GetModel("tbl_film");
        $this->getView("HomePage",$dataFilm->GetFilm());
    }
}
?>