<?php

require_once("db_conn.php");

// Read QUERY

// $query = "SELECT id, home_team, away_team, country, competition, bothhalves_yes, bothhalves_no, exact_number";
// $db_conn->query($query)

// Attempt select query execution
$sql = "SELECT * FROM `main` WHERE id=4";
if($result = mysqli_query($db_conn, $sql)){
    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
        echo $row['country'];

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db_conn);
}
 
// Close connection
mysqli_close($db_conn);

?>