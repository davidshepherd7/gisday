<?php
$servername = "localhost";
$username = "david";
$password = "123";
$dbname = "gisday";

try {
    echo "hello";
    // Create connection
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO attendees (name, email) VALUES (?, ?)");
    $stmt->execute(["1", "anemail"]);

    $result = $conn->query("SELECT * FROM attendees");
    foreach($result as $row) {
        echo $row['name'] . "\n";
    }

    // $stmt->close();
    // $conn->close();
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?> 