<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            text-align: center;
        }

        .card {
            background-color: #f9f9f9;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #555;
            margin-top: 0;
        }

        p,
        ul {
            color: #777;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }

        footer p {
            color: #999;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="card">
            <h2>Address:</h2>
            <p>123 Main Street<br>
                City, State, Zip Code</p>
        </div>

        <div class="card">
            <h2>Phone:</h2>
            <p>(123) 456-7890</p>
        </div>

        <div class="card">
            <h2>Email:</h2>
            <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>

        <div class="card">
            <h2>Social Media:</h2>
            <ul>
                <li><a href="https://twitter.com/example">Twitter</a></li>
                <li><a href="https://facebook.com/example">Facebook</a></li>
                <li><a href="https://instagram.com/example">Instagram</a></li>
            </ul>
        </div>

        <div class="container">
            <div class="card">
                <h2>Contact Form:</h2>
                <form action="#" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>


            <footer>
                <p>We value your feedback and inquiries and will respond to you as soon as possible.</p>
            </footer>
        </div>
</body>

</html>