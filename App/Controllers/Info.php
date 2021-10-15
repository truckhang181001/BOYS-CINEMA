<?php
class Info extends controller{
    function __construct()
    {
        if(isset($_GET['film'])){
            $dataFilm = $this->getModel("tbl_film");
            if($dataFilm->IssetFilm($_GET['film'])){
                $classFilm = $dataFilm->GetFilm('id='.$_GET['film']);
                $dataCate = $this->getModel('tbl_category');
                $dataComment = $this->getModel('tbl_comment');
                $dataRating = $this->getModel('tbl_rating');
                $data = [
                    "film"=>$classFilm,
                    "category"=>$dataCate->GetCategory('id='.$classFilm[0]->id_category)
                ];
                $this->getView("InfoPage",$data);
            }
            else{
                $this->getView("Error404");
            }
        }
    }
}
?>