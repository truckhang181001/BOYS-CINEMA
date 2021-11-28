<?php
    require_once __DIR__."/../../config.php";

    function createConnection(&$sql) {
        $sql = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Connection error!");
    }

    function executeQuery($sql, $q) {
        return mysqli_query($sql, $q);
    }

    function executeNoneQuery($sql, $q) {
        return mysqli_query($sql, $q) != false;
    }

    function releaseMemory($sql, $result = null) {
        if ($result != null) {
            mysqli_free_result($result);
        }
        mysqli_close($sql);
    }
?>