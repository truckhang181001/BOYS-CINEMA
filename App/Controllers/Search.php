<?php
    class Search extends controller{
        function PhimDangChieu(){
            $data = $this->getModel("tbl_film");
            $this->getView("SearchPage",$data->GetFilm());
        }
        function PhimSapChieu(){
            echo "Phim sap chieu";
        }
    }
?>