<?php
    if($url=="add"){
        $dataCategory = $this->getModel("tbl_category")->getCategory();
        $this->getViewAd("film_add",["category"=>$dataCategory]);
    }
    if($url=="detail" && isset($_GET['id'])){
        $dataFilm = $this->getModel("tbl_film")->GetFilm()[0];
        $dataCategory = $this->getModel("tbl_category")->getCategory();
        $dataIMG = $this->getModel("tbl_image")->getImage("id_film=".$_GET['id']);
        $this->getViewAd("film_detail",[
            "category"=>$dataCategory,
            "film"=>$dataFilm,
            "img"=>$dataIMG
        ]);
    }
    if($url=='default'){
        $dataFilm = $this->getModel("tbl_film")->GetFilm();
        $this->getViewAd("film",$dataFilm);
    }