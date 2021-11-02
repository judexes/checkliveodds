<?php

require_once("db_conn.php");

$home_team = $_POST['home_team'];
$away_team = $_POST['away_team'];
$country = $_POST['country'];
$competition = $_POST['competition'];
$bothhalves_yes = $_POST['bothhalves_yes'];
$bothhalves_no = $_POST['bothhalves_no'];
$exact_number = $_POST['exact_number'];
 
// INSERT QUERY
$query = "INSERT INTO main(home_team, away_team, country, competition,bothhalves_yes, bothhalves_no, exact_number) VALUES ('$home_team', '$away_team', '$country', '$competition', '$bothhalves_yes', '$bothhalves_no', '$exact_number')";

if(
    (!isset($home_team) || trim($home_team) == '') ||
    (!isset($away_team) || trim($away_team) == '') ||
    (!isset($country) || trim($country) == '') ||
    (!isset($competition) || trim($competition) == '') ||
    (!isset($bothhalves_yes) || trim($bothhalves_yes) == '') ||
    (!isset($bothhalves_no) || trim($bothhalves_no) == '') ||
    (!isset($exact_number) || trim($exact_number) == '') ) {
   echo "You did not fill out the required fields.";
} else {
    if ($db_conn->query($query) === TRUE) {
        echo "Record inserted succesfully";
    } else {
        echo "Error:" . $query. "<br>" . $db_conn->error;
    }
}


header("Location: ../");
exit();

?>