<?php
class info extends controller{
    function __construct()
    {
        if(isset($_GET['film'])){
            $dataFilm = $this->getModel("tbl_film");
            if($dataFilm->IssetFilm($_GET['film'])){
                $classFilm = $dataFilm->GetFilm('id='.$_GET['film']);
                $dataComment = $this->getModel('tbl_comment');
                $dataRating = $this->getModel('tbl_rating');
                $data = [
                    "film"=>$classFilm,
                ];
                $this->getView("info_page",$data);
            }
            else{
                $this->getView("error404");
            }
        }
    }
}
?>