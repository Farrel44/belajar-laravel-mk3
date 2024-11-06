

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
        <a href="{{route ('index') }}">
          <button class="bg-gray-900 text-white text-lg py-3 px-6 rounded-lg hover:bg-gray-800 transition">Explore</button>
        </a>
    </div>
    <div class="grid grid-cols-2 gap-4 lg:grid-cols-4">
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/1.jpg" alt="image1" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 1</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/2.jpg" alt="image2" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 2</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/3.jpg" alt="image3" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 3</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/4.jpg" alt="image4" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 4</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/5.jpg" alt="image5" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 5</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/6.jpg" alt="image6" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 6</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/7.jpg" alt="image7" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 7</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
      <div class="w-80 h-96 rounded-lg overflow-hidden bg-white/30 backdrop-blur-lg shadow-lg border border-white/20 p-4">
          <img src="/assets/images/8.jpg" alt="image8" class="object-cover w-full h-48 rounded-md mb-4">
          <h2 class="text-xl font-semibold text-gray-800">Image Title 8</h2>
          <p class="text-sm text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras nec aliquet lectus, vitae mattis velit. In ut orci eu augue semper finibus sit amet vitae risus. Aliquam commodo arcu at metus pretium convallis.</p>
      </div>
  </div>
  <div class="text-center mb-16 padd pt-10">
    <h1 class="text-5xl font-extrabold text-gray-900 mb-2">Learn more down below</h1>
    <p class="text-lg text-gray-700 mb-10">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Faucibus in libero risus semper habitant arcu eget. Et integer facilisi eget diam.</p>
    <a href="{{route ('about') }}">
      <button class="bg-gray-900 text-white text-lg py-3 px-6 rounded-lg hover:bg-gray-800 transition">Explore</button>
    </a>
   </div>
</body>
</html>

