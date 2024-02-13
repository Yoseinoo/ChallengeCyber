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
    <title>Business Website</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Our Business</h1>
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="banner">
        <div class="container">
            <h2>Welcome to Our Business Website</h2>
            <p>We offer top-notch services to meet your needs.</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="service">
                <h3>Service 1</h3>
                <p>Description of Service 1</p>
            </div>
            <div class="service">
                <h3>Service 2</h3>
                <p>Description of Service 2</p>
            </div>
            <!-- Add more services as needed -->
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Our Business</p>
        </div>
    </footer>
</body>
</html>
