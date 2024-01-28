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
    <span class="nav-text">Give the best route for the customer's</span>



    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto">
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





  <!-- end header jumbotron -->

  <!-- start main section -->
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <!-- Card with Shadow -->
        <div class="card shadow">
          <div class="card-body">
            <h5 class="card-title">Card Title</h5>
            <p class="card-text">Some text content for the card.</p>
            <!-- You can add more content here -->

            <!-- Example: Button inside the card -->
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        <!-- End Card -->

      </div>
    </div>
  </div>
  <!-- End main section -->



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




</body>

</html>