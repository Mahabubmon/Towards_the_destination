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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8"> <!-- Adjust the size as needed for your dashboard content -->

                <!-- Dashboard content goes here -->

            </div>

            <div class="col-md-4"> <!-- Use a separate column for user information -->
                <?php
                // Fetch user information from the database
                $userQuery = "SELECT * FROM login_tbl WHERE email = '$username'";
                $userResult = mysqli_query($conn, $userQuery);
                $userData = mysqli_fetch_assoc($userResult);
                ?>

                <!-- Display user information in the sidebar -->
                <header class="text mr-5">User Information</header>
                <ul class="sidebarlink">
                    <li><strong>Name:</strong>
                        <?php echo $userData['name']; ?>
                    </li>
                    <li><strong>Email:</strong>
                        <?php echo $userData['email']; ?>
                    </li>
                    <!-- Add more user details as needed -->
                </ul>
            </div>
        </div>
    </div>

    <div class="container mt-5"> <!-- Add Bootstrap class 'container' and margin-top -->
        <div class="row justify-content-center"> <!-- Add Bootstrap class 'row' and 'justify-content-center' -->
            <div class="col-md-8"> <!-- Add Bootstrap class 'col-md-8' (adjust the size as needed) -->
                <div class="dashboard">
                    <h2 class="text-center">Dashboard</h2>
                    <div class="widget">
                        <!-- Add your widget content here -->
                    </div>
                    <!-- Add more widgets as needed -->
                </div>

                <div class="recent-activities">
                    <h2 class="text-center">Recent Activities</h2>
                    <ul>
                        <!-- Display recent activities dynamically -->
                        <li>User John Doe logged in.</li>
                        <li>New content added by Admin.</li>
                        <!-- Add more activity items as needed -->
                    </ul>
                </div>

                <div class="notification-center">
                    <h2 class="text-center">Notifications</h2>
                    <ul>
                        <!-- Display notifications dynamically using AJAX -->
                        <li><a href="#">New message received</a></li>
                        <li><a href="#">Task assigned</a></li>
                        <!-- Add more notification items as needed -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div>
        <li><a href="edit_profile.php"><i class="fas fa-user-edit"></i>Edit Profile</a></li>
        <li><a href="change_password.php"><i class="fas fa-key"></i>Change Password</a></li>


    </div>


    <!-- In the dashboard section -->
    <div class="widget mt-3">
        <h3 class="text-center">User Statistics</h3>
        <!-- Add dynamic content based on user statistics -->
    </div>



    <!-- Inside the Dashboard content section (within the col-md-8) -->
    <div class="dashboard">
        <h2 class="text-center">Dashboard @/div></h2>

        <!-- Card 1 -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card Title 1</h5>
                <p class="card-text">Some text for Card 1. You can add more details here.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Card Title 2</h5>
                <p class="card-text">Some text for Card 2. You can add more details here.</p>
            </div>
        </div>



        <!-- In the notification-center section -->
        <div class="notification-center mt-3">
            <h2 class="text-center">Notifications</h2>
            <ul id="notificationList">
                <!-- Use JavaScript to dynamically update this list -->
            </ul>
        </div>




        <!-- In the recent-activities section -->
        <!-- <div class="recent-activities mt-3">
            <h2 class="text-center">Recent Activities</h2>
            <ul>
                <?php
                // Fetch and display recent activities from the database
                // Modify this part based on your database schema
                $activitiesQuery = "SELECT * FROM activities ORDER BY timestamp DESC LIMIT 5";
                $activitiesResult = mysqli_query($conn, $activitiesQuery);
                while ($activity = mysqli_fetch_assoc($activitiesResult)) {
                    echo "<li>{$activity['description']}</li>";
                }
                ?>
            </ul>
        </div> -->


        <!-- Add this toggle switch in the header or settings section -->
        <!-- <label class="switch">
            <input type="checkbox" id="darkModeToggle">
            <span class="slider round"></span>
        </label> -->




        <!-- Add more cards as needed -->

        <div class="widget mt-3">
            <!-- Your existing widget content -->
        </div>

        <div class="recent-activities mt-3">
            <!-- Your existing recent activities content -->
        </div>

        <div class="notification-center mt-3">
            <!-- Your existing notification center content -->
        </div>
    </div>


    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 গন্তব্যের দিকে. All Rights Reserved.</p>
    </footer>
    <!-- end footer -->


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