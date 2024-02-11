<?php
session_start();

include '../db.php';

$username = isset($_SESSION['email']) ? $_SESSION['email'] : '';

if (!$username) {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit();
}

// Fetch user information from the database
$userQuery = "SELECT * FROM login_tbl WHERE email = '$username'";
$userResult = mysqli_query($conn, $userQuery);
$userData = mysqli_fetch_assoc($userResult);

// Handle form submission for updating profile
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newName = mysqli_real_escape_string($conn, $_POST['new_name']);
    $newEmail = mysqli_real_escape_string($conn, $_POST['new_email']);

    // Perform update in the database
    $updateQuery = "UPDATE login_tbl SET name='$newName', email='$newEmail' WHERE email='$username'";
    mysqli_query($conn, $updateQuery);

    // Update the session variable with the new email if it was changed
    $_SESSION['email'] = $newEmail;

    // Redirect to the profile page after update
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/all.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>Edit Profile</title>
</head>

<body>
    <!-- Your navigation bar or header goes here -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="new_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="new_name" name="new_name"
                                    value="<?php echo $userData['name']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="new_email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="new_email" name="new_email"
                                    value="<?php echo $userData['email']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Your footer goes here -->

    <!-- Your JavaScript libraries and scripts go here -->

</body>

</html>