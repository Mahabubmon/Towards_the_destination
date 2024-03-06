<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Sidebar Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #sidebar {
            width: 200px;
            background-color: #f4f4f4;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow: auto;
        }

        #sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        #content {
            margin-left: 200px;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div id="sidebar">
        <a href="#card1">Card 1</a>
        <a href="#card2">Card 2</a>
        <a href="#card3">Card 3</a>
    </div>
    <div id="content">
        <div id="card1" class="card">
            <h2>Card 1</h2>
            <p>This is the content of Card 1.</p>
        </div>
        <div id="card2" class="card">
            <h2>Card 2</h2>
            <p>This is the content of Card 2.</p>
        </div>
        <div id="card3" class="card">
            <h2>Card 3</h2>
            <p>This is the content of Card 3.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarLinks = document.querySelectorAll('#sidebar a');

            sidebarLinks.forEach(link => {
                link.addEventListener('click', function (event) {
                    event.preventDefault();

                    const targetCardId = this.getAttribute('href').substring(1);
                    const targetCard = document.getElementById(targetCardId);

                    if (targetCard) {
                        // Hide all cards
                        document.querySelectorAll('.card').forEach(card => {
                            card.style.display = 'none';
                        });

                        // Display the target card
                        targetCard.style.display = 'block';
                    }
                });
            });
        });
    </script>
</body>

</html>