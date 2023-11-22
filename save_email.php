<?php

// save_email.php

// Include your database configuration file (config.php)
include 'config.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve email from the form
    $email = $_POST['email'];

    // Insert data into the "users" database (Update table name to 'users', update as needed)
    $insertQuery = "INSERT INTO users (email) VALUES ('$email')";
    $result = mysqli_query($conn, $insertQuery);

    // Check if the query was successful
    if ($result) {
        // Send a welcome email to the subscriber
        $subject = "Welcome to Our Website";
        $message = "Thank you for subscribing to our website!";
        $headers = "From: agaryan437@gmail.com"; 

        // Use the mail() function to send the email
        mail($email, $subject, $message, $headers);

        // Redirect to a confirmation page or homepage
        header('Location: confirmation.html');
        exit();
    } else {
        // Handle the case when the query fails
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // Redirect to the homepage if the form is not submitted
    header('Location: clone.html');
    exit();
}
?>