<?php

require_once("db_conn.php");

// Read QUERY

// $query = "SELECT id, home_team, away_team, country, competition, bothhalves_yes, bothhalves_no, exact_number";
// $db_conn->query($query)

// Attempt select query execution
$sql = "SELECT * FROM main";
if($result = mysqli_query($db_conn, $sql)){
    if(mysqli_num_rows($result) > 0){
            echo "<tr>";

                echo "<th scope='col'>#</th>";
                echo "<th scope='col'>Home</th>";
                echo "<th scope='col'>Away</th>";
                echo "<th scope='col'>Country</th>";
                echo "<th scope='col'>Competition</th>";
                echo "<th scope='col'>btwbdt - Yes</th>";
                echo "<th scope='col'>btwbdt - No</th>";
                echo "<th scope='col'>Exact</th>";
                echo "<th scope='col'>Edit</th>";
                echo "<th scope='col'>Delete</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";            
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['home_team'] . "</td>";
                echo "<td>" . $row['away_team'] . "</td>";
                echo "<td>" . $row['country'] . "</td>";
                echo "<td>" . $row['competition'] . "</td>";
                echo "<td>" . $row['bothhalves_yes'] . "</td>";
                echo "<td>" . $row['bothhalves_no'] . "</td>";
                echo "<td>" . $row['exact_number'] . "</td>";
                echo "<td><a href='update.php?id= ".$row['id']." '> Edit </a></td>";
                echo "<td><a href='scripts/delete.php?del= ".$row['id']." '> Delete </a></td>";
            echo "</tr>";
        }
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