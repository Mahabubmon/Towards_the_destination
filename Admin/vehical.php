<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Cards</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 16px;
            color: #666;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Car">
            <div class="card-content">
                <h2 class="card-title">Car</h2>
                <p class="card-description">A car is a wheeled motor vehicle used for transportation.</p>
            </div>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Bicycle">
            <div class="card-content">
                <h2 class="card-title">Bicycle</h2>
                <p class="card-description">A bicycle, also called a bike or cycle, is a human-powered or motor-powered,
                    pedal-driven, single-track vehicle.</p>
            </div>
        </div>
        <div class="card">
            <img src="https://via.placeholder.com/300" alt="Motorcycle">
            <div class="card-content">
                <h2 class="card-title">Motorcycle</h2>
                <p class="card-description">A motorcycle, often called a motorbike, bike, or cycle, is a two- or
                    three-wheeled motor vehicle.</p>
            </div>
        </div>
        <!-- Add more cards for other vehicles -->
    </div>
</body>

</html>