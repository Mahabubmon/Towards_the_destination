<?php
session_start();

include 'db.php';

$username = isset($_SESSION['email']) ? $_SESSION['email'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/bootstrap.min.css" />
  <link rel="stylesheet" href="./css/all.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>গন্তব্যের দিকে</title>
</head>


<body>

  <!-- start nav-bar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">গন্তব্যের দিকে</a>
    <span class="nav-text">Give the best route for the peace seeker</span>



    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto">
      <li><a class="nav-link" href="">Route</a></li>
      <li><a class="nav-link" href="">Vehicle</a></li>
      <?php if ($username) { ?>
        <!-- If user is logged in, display logout button -->
        <li class="nav-item logoutbtn">
          <a href="logout.php" class="nav-link ">
            <button type="button" class="btn btn-outline-light ">Logout</button>
          </a>
        </li>
      <?php } else { ?>
        <!-- If user is not logged in, display login and registration buttons in the same row -->
        <li class="nav-item ml-auto">
          <a href="login.php" class="nav-link">
            <button type="button" class="btn btn-outline-light loginbtn">Login</button>
          </a>
          <a href="registration.php" class="nav-link regbtn">
            <button type="button" class="btn btn-outline-light ">Registration</button>
          </a>
        </li>
      <?php } ?>
    </ul>
    </div>
  </nav>
  <!-- End nav-bar -->
  <!-- Sidebar -->
  <?php if ($username) { ?>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn" onclick="toggleSidebar()"></i>

    </label>
    <div class="sidebar">
      <i class="fas fa-times" id="closeBtn" onclick="closebtn()"></i>
      <header>Test Case</header>
      <ul class="sidebarlink">
        <li><a href="#"><i class="fas fa-qrcode"></i>Home</a></li>
        <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
        <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
        <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
      </ul>
    </div>
  <?php } ?>
  <!-- End Sidebar -->
  <!-- start header jumbotron -->
  <div class="back-image">
  </div>


  <!-- Contact Section -->
  <section class="contact-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-white">Contact Us</h2>
          <p class="text-white">Feel free to get in touch with us if you have any questions or concerns.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mx-auto text-center">
          <i class="fas fa-envelope fa-3x mb-3 text-white"></i>
          <p>
            <a href="mailto:info@example.com" class="text-white">info@example.com</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->


  <!-- end header jumbotron -->
  <!-- start footer -->
  <footer class="bg-dark text-white text-center py-3">
    <p>&copy; 2024 গন্তব্যের দিকে. All Rights Reserved.</p>
  </footer>
  <!-- end footer -->


  <!-- javascript section -->
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="./js/all.min.js"></script>
  <script src="./js/script.js"></script>





</body>

</html>
<script>
  function toggleSidebar() {
    $('.sidebar').toggleClass('active');
    $('#closeBtn').toggle(); // Toggle close button visibility
  }

  function closebtn() {
    $('.sidebar').removeClass('active');
    $('#closeBtn').hide(); // Hide close button
  }

</script>