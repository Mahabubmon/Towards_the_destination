<?php
session_start();

include '../db.php';

$username = isset($_SESSION['email']) ? $_SESSION['email'] : '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>গন্তব্যের দিকে</title>
</head>


<body>

    <!-- start nav-bar -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand d-flex align-items-center justify-content-center">
            <span class="text text-center">গন্তব্যের দিকে</span>
        </a>




        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav ml-auto">
            <?php if ($username) { ?>
                <!-- If user is logged in, display logout button -->
                <li class="nav-item logoutbtn">
                    <a href="../logout.php" class="nav-link ">
                        <button type="button" class="btn btn-outline-light ">Logout</button>
                    </a>
                </li>
            <?php } else { ?>
                <!-- If user is not logged in, display login and registration buttons in the same row -->

            <?php } ?>
        </ul>
        </div>
    </nav>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 গন্তব্যের দিকে. All Rights Reserved.</p>
    </footer>
    <!-- end footer -->
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
    <?php
    // Fetch user information from the database
    $userQuery = "SELECT * FROM users WHERE email = '$username'";
    $userResult = mysqli_query($conn, $userQuery);
    $userData = mysqli_fetch_assoc($userResult);
    ?>

    <!-- Display user information in the sidebar -->
    <header>User Information</header>
    <ul class="sidebarlink">
        <li><strong>Name:</strong>
            <?php echo $userData['name']; ?>
        </li>
        <li><strong>Email:</strong>
            <?php echo $userData['email']; ?>
        </li>
        <!-- Add more user details as needed -->
    </ul>

    <div class="dashboard">
        <h2>Dashboard</h2>
        <div class="widget">
            <!-- Add your widget content here -->
        </div>
        <!-- Add more widgets as needed -->
    </div>

    <div class="recent-activities">
        <h2>Recent Activities</h2>
        <ul>
            <!-- Display recent activities dynamically -->
            <li>User John Doe logged in.</li>
            <li>New content added by Admin.</li>
            <!-- Add more activity items as needed -->
        </ul>
    </div>


    <!-- javascript section -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/script.js"></script>





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