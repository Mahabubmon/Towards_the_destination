<?php
include 'db.php';


if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $sql = mysqli_query($conn, "INSERT INTO `login_tbl`(`email`, `password`) VALUES ('$email','$pass')");

} else {

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
            /* Add your preferred background color */
        }

        .custom-card {
            max-width: 400px;
            width: 100%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        .custom-card .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .signin {
            text-align: center;
        }
    </style>
    <title>Registration</title>
</head>

<body>

    <div class="card custom-card">
        <div class="card-body">

            <h2 class="text-center mb-4">Registration</h2>

            <form method="post">
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree to the <a href="#">Terms of Service</a>
                        and <a href="#">Privacy Policy</a></label>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Register</button>
                <div class="signin">
                    <p>Already have an account? <a href="login.php">Log in</a>.</p>
                </div>
            </form>

        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myajax.js"></script>
</body>

</html>