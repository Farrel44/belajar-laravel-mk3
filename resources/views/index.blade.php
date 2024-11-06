<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tailwind CSS setup -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
    
    <form id="loginForm" class="bg-white p-8 rounded-lg shadow-md w-80">
        <h1 class="text-3xl font-bold pb-4 text-center">Login</h1>
        
        <div class="mb-4">
            <label for="username" class="block font-semibold mb-2">Username:</label>
            <input type="text" name="username" id="username" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold mb-2">Password:</label>
            <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit" class="w-full bg-gray-800 text-white p-2 rounded-md hover:bg-gray-900 transition-colors">LOGIN</button>
    </form>

    <script src="assets/js/script.js"></script>
</body>
</html>
