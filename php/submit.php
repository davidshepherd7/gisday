<?php

require 'db.php';
require 'create_mustache.php';

try {
    $conn = connect();
    $stmt = $conn->prepare("INSERT INTO attendees (name, email) VALUES (?, ?)");
    $stmt->execute([$_POST['name'], $_POST['email']]);
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$m = create_mustache();
$tpl = $m->loadTemplate('submit');
echo $tpl->render(array('name' => $_POST['name']));

?>
