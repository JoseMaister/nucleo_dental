<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nucleo Dental</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans flex flex-col min-h-screen">

  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
      <!-- Logo -->
      <a href="#" class="text-xl font-bold text-indigo-700">NÚCLEO DENTAL</a>
      
      <!-- Links -->
      <ul class="hidden md:flex space-x-6 items-center">
        <li><a href="#" class="text-gray-700 hover:text-indigo-600">Home</a></li>
        <li><a href="#" class="text-gray-700 hover:text-indigo-600">Services</a></li>
        <li><a href="#" class="text-gray-700 hover:text-indigo-600">About us</a></li>
        <li><a href="#" class="text-gray-700 hover:text-indigo-600">Technology</a></li>
        <li><a href="#" class="bg-indigo-700 text-white px-5 py-2 rounded-full hover:bg-indigo-800">Contact</a></li>
        
        <!-- Language Dropdown -->
        <li class="relative">
          <button id="langBtn" class="flex items-center gap-2 border px-3 py-1 rounded hover:bg-gray-100">
            <img src="https://flagcdn.com/w20/us.png" alt="EN" class="w-5 h-4">
            <span>EN</span>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <!-- Dropdown -->
          <ul id="langMenu" class="absolute hidden bg-white border rounded mt-2 w-28 shadow-lg z-50">
            <li>
              <a href="#" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100">
                <img src="https://flagcdn.com/w20/us.png" alt="EN" class="w-5 h-4"> EN
              </a>
            </li>
            <li>
              <a href="#" class="flex items-center gap-2 px-3 py-2 hover:bg-gray-100">
                <img src="https://flagcdn.com/w20/mx.png" alt="ES" class="w-5 h-4"> ES
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Contenido principal -->
  <main class="flex-1">

    <!-- Hero -->
    <section class="relative">
      <img src="https://as1.ftcdn.net/v2/jpg/02/46/18/78/1000_F_246187812_D7A1GzXLISKxcKr24TpH095qPeumMv6Q.jpg" class="w-full h-[500px] object-cover">
      <div class="absolute inset-0 bg-black bg-opacity-30"></div>
      <div class="absolute top-1/2 left-10 transform -translate-y-1/2 text-white max-w-xl">
        <h2 class="text-4xl font-bold leading-tight">Creating vibrant smiles<br>for healthy lifestyles</h2>
        <p class="mt-4 text-lg">With over 25 years of experience we can give you<br>the beautiful healthy smile you deserve.</p>
        <a href="#" class="mt-6 inline-block bg-indigo-700 hover:bg-indigo-800 text-white px-6 py-3 rounded-full shadow-lg">
          Check our services
        </a>
        <div class="mt-6 inline-flex items-center rounded-full border border-white bg-white bg-opacity-10 px-5 py-2 text-white">
          <i class="fa-solid fa-phone mr-3 text-white text-lg"></i>
          <div class="flex flex-col leading-tight text-white">
            <span>+1 (915) 308 - 0101</span>
            <span>+52 (656) 625 - 9250</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Financing -->
    <section class="bg-gray-100 py-12">
      <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between px-6 gap-6">
        <!-- Icono -->
        <div class="flex-shrink-0">
          <img src="https://as1.ftcdn.net/v2/jpg/05/05/68/88/1000_F_505688804_xKqHrjd4lC8zDvBNqZWTFw2tq7zMXbjz.webp" alt="Financing" class="w-16 h-16 md:w-20 md:h-20">
        </div>

        <!-- Texto -->
        <div class="text-center md:text-left flex-1">
          <h3 class="text-2xl md:text-3xl font-semibold">
            Smile now... <span class="text-indigo-700 font-bold">Pay later!</span>
          </h3>
          <p class="mt-2 text-gray-600">We now offer finance in our treatments</p>
        </div>

        <!-- Botón -->
        <div class="flex-shrink-0">
          <a href="#" class="inline-block border border-gray-400 px-6 py-3 rounded-full hover:bg-gray-200">
            Call us about financing.
          </a>
        </div>
      </div>
    </section>

  </main>

  <!-- Footer -->
  <footer class="bg-indigo-700 text-white text-center p-6 mt-auto">
    <p class="text-xl">Find Your Perfect Smile, <span class="font-bold">Today!</span></p>
    <small class="block mt-2">Nucleo Dental is located in <strong>Juarez, Chihuahua</strong>, but patients visit us from the United States, Mexico and El Paso, TX.</small>
  </footer>

  <!-- Script dropdown -->
  <script>
    const btn = document.getElementById('langBtn');
    const menu = document.getElementById('langMenu');

    // Abrir/cerrar dropdown
    btn.addEventListener('click', (e) => {
      e.stopPropagation(); // evita que el click cierre el menú
      menu.classList.toggle('hidden');
    });

    // Evitar que clic en el menú cierre el dropdown
    menu.addEventListener('click', (e) => e.stopPropagation());

    // Cerrar si clickea afuera
    window.addEventListener('click', () => {
      menu.classList.add('hidden');
    });
  </script>

</body>
</html>
