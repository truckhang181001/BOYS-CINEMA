<?php
class Home extends controller{
    function __construct()
    {
        $dataFilm = $this->GetModel("tbl_film");
        $this->getView("HomePage",$dataFilm->GetFilm());
    }
}
?>