<?php
class search extends controller
{

    function PhimDangChieu()
    {
        //Lấy danh sách phim đang chiếu
        $tblSche = $this->GetModel("tbl_schedule");
        $dataSche = $tblSche->GetSchedule("date='" . date("Y/m/d") . "'");
        $dataFilm = [];
        foreach ($dataSche as $item) {
            $dataFilm[] = $item->GetFilm();
        }
        filterFilm($dataFilm);
        
        $dataCate = $this->getModel("tbl_category");
        $data = [
            "film" => $dataFilm,
            "category" => $dataCate->getCategory(),
            "status" => 0
        ];
        $this->getView("search_page", $data);
    }
    function PhimSapChieu()
    {
        //Lấy danh sách phim đang chiếu
        $tblSche = $this->GetModel("tbl_schedule");
        $dataSche = $tblSche->GetSchedule("date > '" . date("Y/m/d") . "'");
        $dataFilm = [];
        foreach ($dataSche as $item) {
            $dataFilm[] = $item->GetFilm();
        }
        filterFilm($dataFilm);
        $dataCate = $this->getModel("tbl_category");
        $data = [
            "film" => $dataFilm,
            "category" => $dataCate->getCategory(),
            "status" => 1
        ];
        $this->getView("search_page", $data);
    }

}
function filterFilm(&$dataFilm){
    if (isset($_GET['category']) && $_GET['category'] != null) {
        foreach ($dataFilm as $key=>$item) {
            if(!in_array($item->id_category,$_GET['category'])) unset($dataFilm[$key]);
        }
    }
    if (isset($_GET['type']) && $_GET['type'] != null) {
        foreach ($dataFilm as $key=>$item) {
            if(!in_array($item->type,$_GET['type'])) unset($dataFilm[$key]);
        }
    }
}
