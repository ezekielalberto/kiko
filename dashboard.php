<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <?php include 'navbar.php'; ?>
    <div class="container mx-auto py-12 px-4">
        <h1 class="text-4xl font-bold text-gray-800 mb-8">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-blue-500 text-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold">Total Teams</h2>
                <p class="text-2xl mt-4">
                    <?php
                    include 'db.php';
                    $result = $conn->query("SELECT COUNT(*) AS total FROM teams");
                    $row = $result->fetch_assoc();
                    echo $row['total'];
                    ?>
                </p>
            </div>
            <div class="bg-green-500 text-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold">Total Wins</h2>
                <p class="text-2xl mt-4">
                    <?php
                    $result = $conn->query("SELECT SUM(wins) AS total FROM teams");
                    $row = $result->fetch_assoc();
                    echo $row['total'];
                    ?>
                </p>
            </div>
            <div class="bg-red-500 text-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-bold">Total Losses</h2>
                <p class="text-2xl mt-4">
                    <?php
                    $result = $conn->query("SELECT SUM(losses) AS total FROM teams");
                    $row = $result->fetch_assoc();
                    echo $row['total'];
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
