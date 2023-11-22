<?php
// signin_process.php

// Include your database configuration file (config.php)
include 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password']; // Note: For security, consider encrypting the password

    // Insert data into the database (Update table name to 'member', update as needed)
    $insertQuery = "INSERT INTO members (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $insertQuery);

    // Check if the query was successful
    if ($result) {
        // Redirect to the homepage after successful login
        header('Location: home.html'); // Update to the HTML file
        exit();
    } else {
        // Handle the case when the query fails
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Redirect to the login page if the form is not submitted
    header('Location: index.html');
    exit();
}
?>
