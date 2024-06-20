<?php
require_once 'Database.php';
$db = new Database();
$conn = $db->dbConnection();

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name=?, email=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssi", $name, $email, $id);

if ($stmt->execute()) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: ". $conn->error;
}

$stmt->close();
$conn->close();
?>
