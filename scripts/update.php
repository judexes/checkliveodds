<?php

require_once("db_conn.php");

$home_team = $_POST['home_team'];
$away_team = $_POST['away_team'];
$country = $_POST['country'];
$competition = $_POST['competition'];
$bothhalves_yes = $_POST['bothhalves_yes'];
$bothhalves_no = $_POST['bothhalves_no'];
$exact_number = $_POST['exact_number'];
$dateModified = $_POST['dateModified'];
 
// UPDATE QUERY
$query = "UPDATE main set home_team ='$home_team', away_team ='$away_team', country ='$country', competition ='$competition', bothhalves_yes ='$bothhalves_yes', bothhalves_no ='$bothhalves_no', exact_number ='$exact_number', dateModified ='$dateModified' WHERE id='" . $_POST["id"] . "'";


if(
    (!isset($home_team) || trim($home_team) == '') ||
    (!isset($away_team) || trim($away_team) == '') ||
    (!isset($country) || trim($country) == '') ||
    (!isset($competition) || trim($competition) == '') ||
    (!isset($bothhalves_yes) || trim($bothhalves_yes) == '') ||
    (!isset($bothhalves_no) || trim($bothhalves_no) == '') ||
    (!isset($exact_number) || trim($exact_number) == '') ||
    (!isset($dateModified) || trim($dateModified) == '') ) {
   echo "You did not fill out the required fields.";
} else {
    if ($db_conn->query($query) === TRUE) {
        echo "Record UPDATED succesfully";
        header("Location: ../");
        exit();
    } else {
        echo "Error:" . $query. "<br>" . $db_conn->error;
    }
}



?>