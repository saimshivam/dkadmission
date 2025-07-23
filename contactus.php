<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Us - DK Admission Consulting</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    .contact-section {
      padding: 60px 20px;
      background-color: #f8f9fa;
    }

    iframe {
      border: 0;
      width: 100%;
      height: 300px;
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
      .contact-section {
        padding: 30px 15px;
        text-align: center;
      }

      .contact-section .col-md-6 {
        margin-bottom: 30px;
      }

      iframe {
        height: 250px;
      }
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Header -->
  <?php include 'header.php'; ?>

  <!-- Contact Section -->
  <section class="contact-section flex-grow-1">
    <div class="container">
      <h2 class="text-center mb-5">Get in Touch</h2>
      <div class="row align-items-start justify-content-center">

        <!-- Contact Form -->
        <div class="col-md-6">
          <form action="process_contact.php" method="post">
            <div class="mb-3">
              <label class="form-label">Your Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your name" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Contact Number</label>
              <input type="tel" class="form-control" name="phone" placeholder="Enter your contact number" pattern="[0-9]{10}" required />
            </div>
            <div class="mb-3">
              <label class="form-label">Message</label>
              <textarea class="form-control" name="message" rows="5" placeholder="Write your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Send Message</button>

            <!-- Success/Error Messages -->
            <?php
              if (isset($_SESSION['mailError'])) {
                echo '<div class="mt-3 text-danger fw-bold">Mail sending failed: ' . $_SESSION['mailError'] . '</div>';
                unset($_SESSION['mailError']);
              }
              if (isset($_SESSION['mailSuccess'])) {
                echo '<div class="mt-3 text-success fw-bold">' . $_SESSION['mailSuccess'] . '</div>';
                unset($_SESSION['mailSuccess']);
              }
            ?>
          </form>
        </div>

        <!-- Office Info and Map -->
        <div class="col-md-6 mt-4 mt-md-0">
          <div>
            <h5>Our Office</h5>
            <p>
              DK Admission Consulting<br />
              Badarjimi Bazar, Mirganj, Gopalganj, Bihar - 841438
            </p>
            <p>Email: drmukesh496@gmail.com<br />Phone: +91-8294424481</p>
          </div>
          <iframe
            src="https://www.google.com/maps?q=Badarjimi+Bazar,+Mirganj,+Gopalganj,+Bihar+841438&output=embed"
            loading="lazy"
            allowfullscreen>
          </iframe>
        </div>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
