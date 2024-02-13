<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // File upload handling
    $file_uploaded = false;
    if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Check if the file was uploaded without errors
        $file_uploaded = true;
        $file_name = $_FILES['file']['name'];
        $file_tmp_name = $_FILES['file']['tmp_name'];
        $file_size = $_FILES['file']['size'];
        // Move the uploaded file to a desired directory
        if(!is_dir('../uploads')) {
            mkdir('../uploads');
        }
        move_uploaded_file($file_tmp_name, '../uploads/' . $file_name);
    }

    // You can process the form data here, for example, send an email
    
    // For demonstration, let's just print the received data
    echo "<h2>Message envoyé:</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";
    
    if ($file_uploaded) {
        $path = 'src/uploads/'.$file_name;
        echo "<p>Fichier enregistré à : $path</p>";
    }
} else {
    // Redirect back to the contact page if accessed directly
    header('Location: ../contact.php');
    exit;
}
?>
