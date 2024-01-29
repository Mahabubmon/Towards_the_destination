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

            <?php } ?>
        </ul>
        </div>
    </nav>

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