<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Team</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto py-10">
        <h1 class="text-4xl font-bold text-center mb-10">Add New Team</h1>
        <form action="insert.php" method="post" class="bg-white shadow-lg rounded-lg p-8 max-w-xl mx-auto">
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Team Name:</label>
                <input type="text" name="team_name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Wins:</label>
                <input type="number" name="wins" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 font-semibold mb-2">Losses:</label>
                <input type="number" name="losses" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-400" required>
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-green-500 hover:bg-green-600 text-white py-2 px-6 rounded-lg">Add Team</button>
                <a href="index.php" class="text-blue-500 hover:underline">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
