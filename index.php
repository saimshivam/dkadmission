<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>DK Admission Consulting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .hero-section {
      min-height: 100vh;
      display: flex;
      align-items: center;
      padding: 40px 20px;
      background-color: #f8f9fa;
    }

    @media (max-width: 767px) {
      .hero-section {
        padding: 20px 10px;
        text-align: center;
      }

      .hero-section .col-md-6 {
        margin-bottom: 20px;
      }

      .hero-section img {
        width: 100%;
        height: auto;
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
  
  <!-- Hero Section -->
  <div class="container-fluid hero-section flex-grow-1">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-6">
        <h2 class="text-success">Your Path to Success</h2>
        <h1 class="fw-bold">Guiding you to top universities</h1>
        <p class="lead">At DK Admission Consulting, we empower students and professionals to unlock their full potential...</p>
        <a href="contactus.php" class="btn btn-primary mt-3">Get in Touch</a>
      </div>
      <div class="col-md-6">
        <img src="assets/images/12.jpg" alt="Students" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
