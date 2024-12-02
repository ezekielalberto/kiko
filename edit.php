<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM teams WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $team = $result->fetch_assoc();
} else {
    die("Team not found.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <h2 class="text-3xl text-center font-bold mb-6">Edit Team</h2>
        <form action="update.php" method="post" class="bg-white shadow-md rounded-lg p-6">
            <input type="hidden" name="id" value="<?php echo $team['id']; ?>">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Team Name:</label>
                <input type="text" name="team_name" value="<?php echo $team['team_name']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Wins:</label>
                <input type="number" name="wins" value="<?php echo $team['wins']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2">Losses:</label>
                <input type="number" name="losses" value="<?php echo $team['losses']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Update Team</button>
        </form>
    </div>
</body>
</html>
