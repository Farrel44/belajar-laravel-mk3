<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Me</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Header Section -->
    <div class="flex justify-center items-center">
      <h1 class="text-6xl font-bold bg-black text-center text-white pb-10 pt-10 w-full">
        About
      </h1>
    </div>

    <!-- Introduction Section -->
    <section class="max-w-3xl mx-auto px-6 py-10">
      <h2 class="text-4xl font-semibold text-gray-700 mb-4">Hello! I'm Farrel Lasso</h2>
      <p class="text-lg text-gray-600 leading-relaxed">
        I'm a passionate [Your Profession or Field] with a love for creating and learning. I thrive on solving problems and pushing myself to grow in new areas, whether that's in coding, design, or . I'm constantly exploring new ways to innovate and make an impact through my work.
      </p>
    </section>

    <!-- Skills Section -->
    <section class="max-w-3xl mx-auto px-6 py-10 bg-white rounded-lg shadow-md">
      <h2 class="text-3xl font-semibold text-gray-700 mb-6">Skills</h2>
      <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-600">
        <li class="flex flex-col">
          <div class="flex items-center">
            <span class="text-blue-500 mr-2">•</span> Web Development
          </div>
          <p class="text-sm text-gray-500 mt-1">Building responsive and modern websites using the latest technologies.</p>
        </li>
        <li class="flex flex-col">
          <div class="flex items-center">
            <span class="text-blue-500 mr-2">•</span> UI/UX Design
          </div>
          <p class="text-sm text-gray-500 mt-1">Creating user-centered designs that enhance user experience and interface.</p>
        </li>
        <li class="flex flex-col">
          <div class="flex items-center">
            <span class="text-blue-500 mr-2">•</span> JavaScript &amp; React
          </div>
          <p class="text-sm text-gray-500 mt-1">Developing interactive web applications with modern JavaScript frameworks.</p>
        </li>
        <li class="flex flex-col">
          <div class="flex items-center">
            <span class="text-blue-500 mr-2">•</span> Database Management
          </div>
          <p class="text-sm text-gray-500 mt-1">Handling data storage, retrieval, and optimization for efficient performance.</p>
        </li>
        <li class="flex flex-col">
          <div class="flex items-center">
            <span class="text-blue-500 mr-2">•</span> Problem Solving
          </div>
          <p class="text-sm text-gray-500 mt-1">Analyzing challenges and creating innovative solutions to complex issues.</p>
        </li>
        <li class="flex flex-col">
          <div class="flex items-center">
            <span class="text-blue-500 mr-2">•</span> Tailwind CSS
          </div>
          <p class="text-sm text-gray-500 mt-1">Utilizing a utility-first CSS framework for fast and efficient styling.</p>
        </li>
      </ul>
    </section>

    <!-- Hobbies Section -->
    <section class="max-w-3xl mx-auto px-6 py-10 mt-10 bg-white rounded-lg shadow-md m">
      <h2 class="text-3xl font-semibold text-gray-700 mb-6">Hobbies & Interests</h2>
      <p class="text-lg text-gray-600 leading-relaxed mb-4">
        When I'm not working, I love spending my time on activities that keep my creativity and energy high. Here are some of my favorite hobbies:
      </p>
      <ul class="list-disc list-inside text-gray-600 space-y-2">
        <li>Exploring new technologies and building personal projects.</li>
        <li>Reading books on self-development and technology trends.</li>
        <li>Traveling to experience different cultures and cuisines.</li>
        <li>Photography to capture memorable moments and beautiful sceneries.</li>
        <li>Spending time outdoors for hiking, cycling, or just a walk in nature.</li>
      </ul>
    </section>
</body>
</html>
