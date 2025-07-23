<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Gallery - DK Admission Consulting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .gallery-image {
      width: 100%;
      height: auto;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease;
    }

    .gallery-image:hover {
      transform: scale(1.02);
    }

    @media (max-width: 576px) {
      .gallery-image {
        max-height: 300px;
        object-fit: cover;
      }
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
<?php include 'navbar.php'; ?>

<!-- Header -->
<?php include 'header.php'; ?>

<!-- Gallery Section -->
<section class="py-5 flex-grow-1">
  <div class="container">
    <h2 class="text-center mb-4">Our Gallery</h2>
    <div class="row">

      <!-- Responsive Gallery Columns -->
      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <img src="assets/images/gallery1.jpg" alt="Gallery 1" class="gallery-image">
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <img src="assets/images/gallery2.jpg" alt="Gallery 2" class="gallery-image">
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <img src="assets/images/gallery3.jpg" alt="Gallery 3" class="gallery-image">
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <img src="assets/images/gallery4.jpg" alt="Gallery 4" class="gallery-image">
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <img src="assets/images/gallery5.jpg" alt="Gallery 5" class="gallery-image">
      </div>

      <div class="col-12 col-sm-6 col-md-4 mb-4">
        <img src="assets/images/gallery6.jpg" alt="Gallery 6" class="gallery-image">
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
