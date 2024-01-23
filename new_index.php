<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css" />

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="./js/script.js"></script>

    <title>Document</title>

    <style>
        #closeBtn {
            display: none;
            /* Initially hide the close button */
            font-size: 20px;
            color: #fff;
            background-color: #e74c3c;
            /* Red background color */
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
            position: absolute;
            top: 10px;
            right: 10px;
            transition: background-color 0.3s;
        }

        #closeBtn:hover {
            background-color: #c0392b;
            /* Darker red on hover */
        }
    </style>

</head>

<body>

    <input type="checkbox" id="check">
    <label for="check">
        <i class="fas fa-bars" id="btn" onclick="toggleSidebar()"></i>
        <i class="fas fa-times" id="closeBtn" onclick="closebtn()"></i>
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
    <script src="./js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="./js/all.min.js"></script>
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

</body>

</html>