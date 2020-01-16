<?php
    session_start();
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname="christmaslist";

    $conn = mysqli_connect($dbhost, $dbuser,$dbpass, $dbname)
?>