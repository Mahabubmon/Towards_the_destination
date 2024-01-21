<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/style.css" /> -->

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>


    <title>Document</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=YourFontFamily&display=swap');

        .sidebar {
            position: fixed;
            left: -250px;
            left: 0;
            width: 250px;
            height: 100%;
            background: #042331;
        }


        .sidebar {
            /* top: 73px; */
            position: fixed;
            left: -250px;
            left: 0;
            width: 250px;
            height: 100%;
            background: #042331;
        }

        .sidebar header {
            font-size: 22px;
            color: white;
            text-align: center;
            line-height: 70px;
            background: #063146;
            user-select: none;
        }

        .sidebar ul a {
            display: block;
            height: 100%;
            width: 100%;
            line-height: 65px;
            font-size: 20px;
            color: white;
            padding-left: 40px;
            box-sizing: border-box;
            border-top: 1px solid rgb(255, 255, 255, .1);
            border-bottom: 1px solid black;
        }

        ul li:hover a {
            padding-left: 50px;
        }

        .sidebar ul a i {
            margin-right: 16px;
        }

        #check {
            display: none;
        }

        #btn {
            position: absolute;
            cursor: pointer;
            background: #042331;
            border-radius: 3px;
        }

        #cancle {
            position: absolute;
            cursor: pointer;
            background: #042331;
            border-radius: 3px;
        }


        label #btn {
            left: 40px;
            top: 25px;
            font-size: 35px;
            color: white;
            padding: 6px 12px;
        }

        label #cancle {
            z-index: 1111;
            left: 195px;
            top: 17px;
            color: #0a5275;
            padding: 4px 9px;

        }

        #check:checked~.sidebar {
            left: 0;
        }
    </style>
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



    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>