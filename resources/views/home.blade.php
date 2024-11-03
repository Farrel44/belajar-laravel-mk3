

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover the beauty around the world</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white flex flex-col items-center justify-center py-16">
    <div class="text-center mb-16">
        <h1 class="text-5xl font-extrabold text-gray-900 mb-2">Discover the beauty around the world</h1>
        <p class="text-lg text-gray-700 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus in libero risus semper habitant arcu eget. Et integer facilisi eget diam.</p>
        <a href="{{route ('about') }}">
          <button class="bg-gray-900 text-white text-lg py-3 px-6 rounded-lg hover:bg-gray-800 transition">Explore</button>
        </a>
    </div>

    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/1.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/2.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/3.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/4.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/5.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/6.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/7.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
        <div class="w-80 h-72 rounded-lg overflow-hidden">
          <img src="/assets/images/8.jpg" alt="image1" class="object-cover w-full h-full">
        </div>
    </div>
</body>
</html>

