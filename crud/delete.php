<?php
require_once 'Database.php';
$db = new Database();
$conn = $db->dbConnection();

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: ". $conn->error;
}

$stmt->close();
$conn->close();
?>
