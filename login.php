<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-gray-700 to-gray-900 text-white">
    <?php include 'navbar.php'; ?>
    <div class="container mx-auto py-12 px-4">
        <div class="max-w-md mx-auto bg-white text-gray-900 rounded-lg shadow-md p-8">
            <h1 class="text-2xl font-bold text-center mb-6">Login</h1>
            <form action="authenticate.php" method="post">
                <div class="mb-4">
                    <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                    <input type="text" name="username" id="username" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-400" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full border rounded-lg px-4 py-2 mt-1 focus:ring-2 focus:ring-blue-400" required>
                </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded-lg font-semibold">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
*