<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nucleo Dental - Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#">NÚCLEO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">About us</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Technology</a></li>
        <li class="nav-item"><a class="btn btn-primary ms-2 px-4" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="position-relative text-white">
  <img src="https://as2.ftcdn.net/v2/jpg/02/46/18/79/1000_F_246187932_EeRX8hXcEH5Ba9KJar0mhgu11YWpY6lc.jpg" class="w-100" style="height:500px;object-fit:cover;">
  <div class="container position-absolute top-50 start-0 translate-middle-y text-start">
    <h2 class="fw-bold">Creating vibrant smiles<br>for healthy lifestyles</h2>
    <p class="lead">With over 25 years of experience we can give you<br>the beautiful healthy smile you deserve.</p>
    <a href="#" class="btn btn-primary btn-lg">Check our services</a>
    <div class="mt-3">
      <button class="btn btn-outline-light me-2">📞 +1 (915) 308 - 0101</button>
      <button class="btn btn-outline-light">📞 +52 (656) 625 - 9250</button>
    </div>
  </div>
</section>

<!-- Financing -->
<section class="bg-light text-center py-5">
  <div class="container">
    <h3><span class="text-dark">Smile now...</span><span class="text-primary fw-bold">Pay later!</span></h3>
    <p class="text-muted">We now offer finance in our treatments</p>
    <a href="#" class="btn btn-outline-secondary">Call us about financing.</a>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center p-4">
  <p class="mb-0">Find Your Perfect Smile, <strong>Today!</strong></p>
  <small>Nucleo Dental is located in <strong>Juarez, Chihuahua</strong>, but patients visit us from the United States, Mexico and El Paso, TX.</small>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
