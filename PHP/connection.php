<?php
    $server = "localhost";
    $usernm = "root";
    $passwd = "";
    $dbname = "users";

    $con = new mysqli($server, $usernm, $passwd,$dbname);

    if($con===false){
        die('Connection error', $con->connect_error);
    }
?>