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

    /* New styles for fixed footer */
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #333;
      color: #fff;
      padding: 15px 0;
      text-align: center;
    }
  </style>
  <style>
    #closeBtn {
      display: none;
      /* Initially hide the close button */
      font-size: 20px;
      color: #fff;
      background-color: #6c748d;
      /* Red background color */
      border: none;
      padding: 8px 12px;
      cursor: pointer;
      border-radius: 5px;
      position: absolute;
      top: 10px;
      right: 10px;
      transition: background-color 0.3s;
      margin-top: 48px;
    }

    #closeBtn:hover {
      background-color: #c0392b;
      /* Darker red on hover */
    }
  </style>

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
        <li class="nav-item">
          <a href="logout.php" class="nav-link">
            <button type="button" class="btn btn-outline-light loginbtn">Logout</button>
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
  <!-- End Sidebar -->
  <!-- start header jumbotron -->
  <div class="back-image">


  </div>

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