<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">গন্তব্যের দিকে</a>
    <span class="nav-text">Give the best route for the peace seeker</span>



    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
    </button>

    <ul class="navbar-nav ml-auto">
        <li><a class="nav-link" href="">Route</a></li>
        <li><a class="nav-link" href="">Vehicle</a></li>
        <li><a class="nav-link" href="contact.php">Contact Us</a></li>
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