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

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <title>গন্তব্যের দিকে</title>


  <style>
    /* Your existing styles */

    /* Style for the side menu */
    .side-menu {
      height: 100%;
      width: 250px;
      position: fixed;
      top: 0;
      left: -250px;
      background-color: #333;
      padding-top: 60px;
      transition: 0.5s;
    }

    .side-menu a {
      padding: 15px 20px;
      text-decoration: none;
      font-size: 18px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .side-menu a:hover {
      color: #f1f1f1;
    }

    .overlay {
      display: none;
      position: fixed;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      z-index: 1;
    }
  </style>
</head>


<body>

  <!-- start nav-bar -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">গন্তব্যের দিকে</a>
    <span class="nav-text">Give the best route for the customer's</span>

    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu"
      onclick="toggleSideMenu()">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link">District</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link">Placement</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link">About</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link">Contact</a></li>
        <li class="nav-item"><a href="index.php" class="nav-link">Info</a></li>
      </ul>

      <ul class="navbar-nav ml-auto">
        <?php if ($username) { ?>
          <!-- If user is logged in, display logout button -->
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <button type="button" class="btn btn-outline-light loginbtn">Logout</button>
            </a>
          </li>
        <?php } else { ?>
          <!-- If user is not logged in, display login button -->
          <li class="nav-item">
            <a href="login.php" class="nav-link">
              <button type="button" class="btn btn-outline-light loginbtn">Login</button>
            </a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
  <!-- End nav-bar -->
  <!-- start header jumbotron -->
  <header class="jumbotron back-image" style="background-image:url('images/Screenshot (742).png');">
  </header>
  <!-- end header jumbotron -->

  <!-- start -->
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="..." class="d-block w-100" alt="...">
      </div>
    </div>
  </div>
  <!-- end -->



  <div class="side-menu">
    <ul class="list-unstyled">
      <li><a href="#">Menu Item 1</a></li>
      <li><a href="#">Menu Item 2</a></li>
      <li><a href="#">Menu Item 3</a></li>
      <!-- Add more menu items as needed -->
    </ul>
  </div>
  <!-- end side menu -->
  <div class="overlay" onclick="toggleSideMenu()"></div>


  <!-- javascript section -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="./js/all.min.js"></script>
  <script src="./js/script.js"></script>


  <script>
    function toggleSideMenu() {
      var sideMenu = document.querySelector('.side-menu');

      if (sideMenu.style.left === '-250px' || sideMenu.style.left === '') {
        sideMenu.style.left = '0';
        document.querySelector('.overlay').style.display = 'block';
      } else {
        sideMenu.style.left = '-250px';
        document.querySelector('.overlay').style.display = 'none';
      }
    }
  </script>
</body>

</html>