<?php
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = " "; // Replace with your MySQL password
$dbname = "smart_db"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fname = $_POST['fname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];

// SQL to insert data
$sql = "INSERT INTO Contact (fname, age, gender, contact) VALUES ('$fname', $age, '$gender', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>