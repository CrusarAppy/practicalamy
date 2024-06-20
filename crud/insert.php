<?php
require_once 'database.php';
$db = new Database();
$conn = $db->dbConnection();

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (name, email) VALUES (?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $email); // "s" means string

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$stmt->close();
$conn->close();
?>
