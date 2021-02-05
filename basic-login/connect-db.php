<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "member_db";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn -> connect_errno){
        die("Connection failed" . mysqli_connect_errno());
    }

?>