<?php
include 'veritabani.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $project_category = $_POST['project_category'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO contacts (name, phone, project_category, email, message) 
            VALUES ('$name', '$phone', '$project_category', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close(); // Close the database connection

