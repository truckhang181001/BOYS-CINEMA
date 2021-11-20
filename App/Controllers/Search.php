<?php
    class search extends controller{
        function PhimDangChieu(){
            $dataFilm = $this->getModel("tbl_film");
            $dataCate = $this->getModel("tbl_category");
            $data= [
                "film"=>$dataFilm->GetFilm(),
                "category"=>$dataCate->getCategory()
            ];
            $this->getView("search_page",$data);
        }
        function PhimSapChieu(){
            echo "Phim sap chieu";
        }
    }
?>