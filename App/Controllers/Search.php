<?php
    class Search extends controller{
        function PhimDangChieu(){
            $dataFilm = $this->getModel("tbl_film");
            $dataCate = $this->getModel("tbl_category");
            $data= [
                "film"=>$dataFilm->GetFilm(),
                "category"=>$dataCate->InnerCate()
            ];
            $this->getView("SearchPage",$data);
        }
        function PhimSapChieu(){
            echo "Phim sap chieu";
        }
    }
?>