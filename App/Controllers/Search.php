<?php
    class search extends controller{
        function PhimDangChieu(){
            $cond= "";
            if(isset($_GET['category']) && $_GET['category'] != null){
                foreach($_GET['category'] as $item){
                    $cond .= "id_category=$item OR ";
                }
            }
            if(isset($_GET['type']) && $_GET['type'] != null){
                foreach($_GET['type'] as $item){
                    $cond .= "type='$item' OR ";
                }
            }

            $dataFilm = $this->getModel("tbl_film");
            $dataCate = $this->getModel("tbl_category");
            $data= [
                "film"=>$dataFilm->GetFilm($cond != ""?substr($cond,0,-3):"1"),
                "category"=>$dataCate->getCategory()
            ];
            $this->getView("search_page",$data);
        }
        function PhimSapChieu(){
            echo "Phim sap chieu";
        }
    }
?>