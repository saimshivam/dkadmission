<?php
  // Get the current page's basename
  $currentPage = basename($_SERVER['REQUEST_URI']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm sticky-top">
  <div class="container">
    <!-- Logo + Brand -->
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="assets/images/logo.png" alt="Logo" width="40" height="40" class="me-2 rounded-circle">
      <span class="fw-bold">DK Admission Consulting</span>
    </a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item mx-2">
          <a class="nav-link <?= ($currentPage == "index.php") ? "active" : "" ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?= ($currentPage == "about.php") ? "active" : "" ?>" href="about.php">About</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?= ($currentPage == "courses.php") ? "active" : "" ?>" href="courses.php">Courses</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?= ($currentPage == "gallery.php") ? "active" : "" ?>" href="gallery.php">Gallery</a>
        </li>
        <li class="nav-item mx-2">
          <a class="nav-link <?= ($currentPage == "contactus.php") ? "active" : "" ?>" href="contactus.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
.navbar .nav-link:hover {
  color: #fff !important;
}
.navbar .nav-link.active {
  color: #fff !important;
  font-weight: bold;
}
</style>
