<?php
require 'db.php';

try {
    $conn = connect();

    $result = $conn->query("SELECT * FROM attendees");
    foreach($result as $row) {
        echo "<div>" . htmlspecialchars($row['name']) . "</div>";
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?> 