<?php
    class admin extends Controller{
        function dashboard(){
            $this->getView("admin_Dashboard",[]);
        }
        function upload(){
            $this->getView("admin_Upload",[]);
        }
    }
?>