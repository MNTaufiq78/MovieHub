<?php
require_once "contact.php";

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['message'];

// SQL query to insert data into the table
$sql = "INSERT INTO feedback (name, email, feedback) VALUES ('$name', '$email', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "Thank you for your feedback!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>