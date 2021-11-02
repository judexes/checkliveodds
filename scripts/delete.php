<?php

require_once("db_conn.php");

if(isset($_GET['del'])) {
    
    $id = $_GET['del'];

    mysqli_query($db_conn, "DELETE FROM main WHERE id=$id");

    header("Location: ../");

}

?>