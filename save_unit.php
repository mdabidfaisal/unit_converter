<?php
// Database connection
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "unit_converter";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from AJAX request
$unitName = $_POST['unitName'];
$unitLabel = $_POST['unitLabel'];
$unitRelation = $_POST['unitRelation'];

// Save data to database
$sql = "INSERT INTO units (name, label, relation) VALUES ('$unitName', '$unitLabel', '$unitRelation')";

if ($conn->query($sql) === TRUE) {
    echo "Unit saved successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
