<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $team_name = $_POST['team_name'];
    $wins = $_POST['wins'];
    $losses = $_POST['losses'];
    $points = $wins * 2 + $losses;

    $sql = "UPDATE teams SET 
            team_name='$team_name', 
            wins=$wins, 
            losses=$losses, 
            points=$points 
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>
