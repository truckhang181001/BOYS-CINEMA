<?php
class Home extends controller{
    function __construct()
    {
        $data = $this->getModel("tbl_film");
        $this->getView("HomePage",$data->GetFilm());
    }
}
?>