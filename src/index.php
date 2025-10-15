<?php
include 'db.php';
$result = $conn->query("SELECT 'Connected to MySQL successfully!' AS message");
$row = $result->fetch_assoc();
echo $row['message'];
?>
