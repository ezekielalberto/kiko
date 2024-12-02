<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basketball Standings</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-10">Barangay Basketball Standings</h1>
        <div class="flex justify-between mb-6">
            <a href="create.php" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded">Add New Team</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-lg rounded-lg border-collapse">
                <thead>
                    <tr class="bg-blue-600 text-white">
                        <th class="py-3 px-5 text-left">ID</th>
                        <th class="py-3 px-5 text-left">Team Name</th>
                        <th class="py-3 px-5 text-center">Wins</th>
                        <th class="py-3 px-5 text-center">Losses</th>
                        <th class="py-3 px-5 text-center">Points</th>
                        <th class="py-3 px-5 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'db.php';
                    $sql = "SELECT * FROM teams ORDER BY points DESC";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr class='border-b hover:bg-gray-100'>";
                            echo "<td class='py-2 px-5'>" . $row["id"] . "</td>";
                            echo "<td class='py-2 px-5'>" . $row["team_name"] . "</td>";
                            echo "<td class='py-2 px-5 text-center'>" . $row["wins"] . "</td>";
                            echo "<td class='py-2 px-5 text-center'>" . $row["losses"] . "</td>";
                            echo "<td class='py-2 px-5 text-center font-bold'>" . $row["points"] . "</td>";
                            echo "<td class='py-2 px-5 text-center'>
                                    <a href='edit.php?id=" . $row["id"] . "' class='text-yellow-500 hover:text-yellow-700 mr-4'>Edit</a>
                                    <a href='delete.php?id=" . $row["id"] . "' class='text-red-500 hover:text-red-700'>Delete</a>
                                  </td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center py-4'>No teams found</td></tr>";
                    }
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
