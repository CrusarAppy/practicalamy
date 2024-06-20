<?php
require_once 'Database.php';
$db = new Database();
$conn = $db->dbConnection();

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: ". $row["id"]. " - Name: ". $row["name"]. " - Email: ". $row["email"]. "<br>";
    }
} else {
    echo "No results";
}

$conn->close();
?>
