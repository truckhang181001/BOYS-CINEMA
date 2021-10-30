<?php
    class admin extends Controller{
        function dashboard(){
            $this->getView("admin_Dashboard",[]);
        }
        function upload(){
            $this->getView("admin_Upload",[]);
        }
        function __construct()
        {
            $this->getView("admin_Film",[]);
            // $this->getView("admin_Category",[]);
            // $this->getView("admin_Customer",[]);
        }
    }
?>