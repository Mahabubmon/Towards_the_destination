<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Login</title>

    <style>
        /* Custom CSS for centering the form */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .custom-card {
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            /* Adjust the width as needed */
        }
    </style>
</head>

<body>
    <div class="card custom-card ">
        <h3 class="text text-center mt-5">LOGIN</h3>
        <div class="card-body">
            <form name="form" action="login.php" method="POST" onsubmit="return isvalid();">
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <div class="form-text">You should never share your password with anyone else.</div>
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="check">
                    <label class="form-check-label" for="check">Check me out</label>
                </div>
                <input type="submit" class="btn btn-primary" id="loginBtn" value="Login" name="submit">
            </form>
        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myajax.js"></script>
</body>

</html>