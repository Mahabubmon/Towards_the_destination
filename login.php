<?php

session_start();


// If the user is already logged in, redirect to index.php
if (isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}

include 'db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != '' && $password != '') {
        alert("need to full fill all field");
    } else {



        $sql = "SELECT * FROM login_tbl WHERE email ='$email' AND password ='$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            $_SESSION['email'] = $row['email'];
            header("Location: index.php");

            exit();

        } else {
            echo '<script>
        window.location.href = "login.php";
        alert("Login failed. Invalid Email or Password!!!");
        </script>';
        }

    }
}
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

        #homebtn {}
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
            <button class="btn btn-info" onclick="window.location.href='index.php'">Back To Home</button>


        </div>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/myajax.js"></script>
</body>

</html>

<script>
    function isvalid() {
        var email = document.form.email.value;
        var password = document.form.password.value;
        if (email.length == "" && password.length == "") {
            alert(" Username and password field is empty!!!");
            return false;
        }
        else if (email.length == "") {
            alert(" Email field is empty!!!");
            return false;
        }
        else if (password.length == "") {
            alert(" Password field is empty!!!");
            return false;
        }

    }


    //Sweet alert function
    function sweetAlertSuccess(msg) {
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: msg,
            showConfirmButton: false,
            timer: 1500,
        });
    }

    function sweetAlertErrors(msg) {
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: msg,
            showConfirmButton: false,
            timer: 1500,
        });
    }

</script>