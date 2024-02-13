<?php
// Start the session
session_start();

// Database connection settings
$servername = "mysql";
$username = "db_cyber";
$password = "db_cyber";
$dbname = "db_cyber";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vulnerable query: directly concatenating user input into SQL query
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Authentication successful, set session variable and redirect
        $_SESSION['username'] = $username;
        header('Location: ../home.php');
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        header('Location: ../index.php?error=1');
        exit;
    }
}

// Close connection
$conn->close();
?>
