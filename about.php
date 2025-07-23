<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us - DK Admission Consulting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .about-section {
      padding: 100px 20px 60px; /* Top padding to avoid navbar overlap */
      background-color: #f8f9fa;
      flex-grow: 1;
    }

    .about-section img {
      max-width: 100%;
      height: auto;
    }

    @media (max-width: 767px) {
      .about-section {
        padding: 80px 15px 40px;
        text-align: center;
      }

      .about-section .col-md-6 {
        margin-bottom: 30px;
      }

      .about-section img {
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

  <!-- About Section -->
  <section class="about-section container-fluid">
    <div class="row align-items-center justify-content-center">
      <div class="col-md-6">
        <h5 class="text-success fw-semibold">YOUR PATH TO SUCCESS</h5>
        <h2 class="fw-bold">Guiding you to top universities</h2>
        <p class="lead text-muted">
          At DK Admission Consulting, we specialize in empowering students and professionals to unlock their potential 
          and gain admission to prestigious universities and colleges. Our personalized approach ensures that you receive 
          tailored guidance in application strategy, essay writing, interview preparation, and career counseling.
        </p>
        <p class="text-muted">
          We are dedicated to simplifying the admission process, enabling you to focus on realizing your academic aspirations. 
          Let us help you achieve your dreams and secure a brighter future.
        </p>
        <a href="contactus.php" class="btn btn-success mt-3">Get in Touch</a>
      </div>
      <div class="col-md-6">
        <img src="assets/images/12.jpg" alt="Students studying" class="img-fluid rounded shadow" />
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
