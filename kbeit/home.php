<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | Bashiru Dev Co.</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800">

  <!-- Header -->
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-blue-600">Bashiru Dev Co.</h1>
      <nav class="space-x-6">
        <a href="about.php" class="text-gray-700 hover:text-blue-600">About</a>
        <a href="services.php" class="text-gray-700 hover:text-blue-600">Services</a>
        <a href="careers.php" class="text-gray-700 hover:text-blue-600">Careers</a>
        <a href="contact.php" class="text-gray-700 hover:text-blue-600">Contact</a>
      </nav>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="bg-blue-600 text-white py-20 text-center">
    <h2 class="text-4xl font-bold mb-4">Building Smart Software for a Smarter World</h2>
    <p class="text-lg mb-6">We craft scalable, secure, and stunning digital solutions for businesses worldwide.</p>
    <a href="contact.php" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">Get a Quote</a>
  </section>

  <!-- About Preview -->
  <section class="max-w-5xl mx-auto py-16 px-4">
    <h3 class="text-2xl font-bold mb-4">Who We Are</h3>
    <p class="text-gray-700 mb-6">Bashiru Dev Co. is a full-stack software development firm specializing in web, mobile, cloud, and AI solutions. Our mission is to empower businesses with technology that drives growth and innovation.</p>
    <a href="about.php" class="text-blue-600 font-semibold hover:underline">Learn More →</a>
  </section>

  <!-- Featured Services -->
  <section class="bg-gray-100 py-16">
    <div class="max-w-6xl mx-auto px-4">
      <h3 class="text-2xl font-bold mb-8 text-center">Our Services</h3>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded shadow">
          <h4 class="text-lg font-bold mb-2">Web Development</h4>
          <p class="text-gray-600">Responsive, SEO-optimized websites built with modern tech stacks.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
          <h4 class="text-lg font-bold mb-2">Mobile Apps</h4>
          <p class="text-gray-600">Cross-platform mobile apps for iOS and Android using native and hybrid frameworks.</p>
        </div>
        <div class="bg-white p-6 rounded shadow">
          <h4 class="text-lg font-bold mb-2">AI & Data Science</h4>
          <p class="text-gray-600">Intelligent solutions powered by machine learning and predictive analytics.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="py-16 text-center">
    <h3 class="text-2xl font-bold mb-4">Ready to build something amazing?</h3>
    <a href="contact.php" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">Let’s Talk</a>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-6">
    <div class="max-w-6xl mx-auto px-4 flex justify-between items-center">
      <p>&copy; <?= date("Y") ?> Bashiru Dev Co. All rights reserved.</p>
      <div class="space-x-4">
        <a href="#" class="hover:underline">Privacy</a>
        <a href="#" class="hover:underline">Terms</a>
      </div>
    </div>
  </footer>

</body>
</html>
