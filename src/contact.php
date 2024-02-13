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
    <title>Contact Us</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Contact Us</h1>
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
    <section class="contact">
        <div class="container">
            <h2>Get in Touch</h2>
            <p>Fill out the form below to send us a message:</p>
            <form action="forms/send_message.php" method="post" enctype="multipart/form-data">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="file">Choose a file:</label>
                    <input type="file" id="file" name="file">
                </div>
                <div class="input-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 Our Business</p>
        </div>
    </footer>
</body>
</html>
