<?php
    class personal_information extends Controller{
        function __construct()
        {
            $tblCus = $this->GetModel("tbl_customer");
            $this->getView("personal_information_page");
        }  
    }
?>