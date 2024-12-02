<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $team_name = $_POST['team_name'];
    $wins = $_POST['wins'];
    $losses = $_POST['losses'];
    $points = $wins * 2 + $losses;

    $sql = "INSERT INTO teams (team_name, wins, losses, points) VALUES ('$team_name', $wins, $losses, $points)";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
