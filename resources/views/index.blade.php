<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Tailwind CSS setup -->
    @vite('resources/css/app.css')
    
</head>
<body  class="flex justify-center items-center h-screen bg-gradient-to-r" style="background-image: linear-gradient(to right, #614385, #516395);">
    
    <form id="loginForm" class="bg-white bg-opacity-10 p-8 rounded-lg shadow-lg w-80 backdrop-blur-lg border border-white border-opacity-20">
        <h1 class="text-3xl font-bold pb-4 text-center text-white">Login</h1>
        
        <div class="mb-4">
            <label for="username" class="block font-semibold mb-2 text-white">Username:</label>
            <input type="text" name="username" id="username" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold mb-2 text-white">Password:</label>
            <input type="password" name="password" id="password" class="w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <button type="submit" class="w-full bg-white text-black p-2 rounded-md hover:bg-slate-300 transition-colors">LOGIN</button>
    </form>

    <script src="assets/js/script.js"></script>
</body>
</html>
