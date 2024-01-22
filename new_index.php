<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    <title>Document</title>

</head>

<body>

    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn"></i>
        <i class="fas fa-times" id="cancle"></i>
    </label>
    <div class="sidebar">
        <header>Test Case</header>
        <ul class="sidebarlink">
            <li><a href="#"><i class="fas fa-qrcode"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>

        </ul>
    </div>

    <script>
        $(document).ready(function () {
            $('#btn').click(function () {
                $('.sidebar').toggleClass('active');
            });
        });

    </script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
    <script src="./js/script.js"></script>


</body>

</html>