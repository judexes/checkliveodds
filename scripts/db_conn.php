<?php

$db_host = "localhost";
$db_name ="checkliveodds";
$db_user = "root";
$db_pass="";

$db_conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);


// Check conn

if(!$db_conn) {
    echo '';
    die("connection failed" . mysqli_connect_errno());
}
    // echo 'Connection successful';

?>
