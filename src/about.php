<?php
session_start();

if (!isset($_SESSION['username']) || $_SESSION['username'] === '' || $_SESSION['username'] === null) {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>About Us</h1>
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="about">
        <div class="container">
            <h2>Who We Are</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis augue id urna pharetra ultricies. Nullam non risus auctor, posuere libero ut, lobortis urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed vitae malesuada nunc. Donec tincidunt ante vel ipsum rutrum fermentum. Donec scelerisque tempus dui et volutpat. Nullam ac risus sit amet elit vulputate dignissim. Nunc auctor ante a mi laoreet, sit amet aliquam libero pharetra.</p>
            <h3>Our Mission</h3>
            <p>Our mission is to provide high-quality services to our customers and exceed their expectations.</p>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Our Business</p>
        </div>
    </footer>
</body>
</html>
