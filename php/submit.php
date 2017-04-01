<?php

require 'db.php';

try {
    $conn = connect();

    $stmt = $conn->prepare("INSERT INTO attendees (name, email) VALUES (?, ?)");
    $stmt->execute([$_POST['name'], $_POST['email']]);

    echo "Thank you for registering " . htmlspecialchars($_POST['name']);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>