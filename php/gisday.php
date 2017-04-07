<?php

require 'db.php';
require 'create_mustache.php';


try {
    $conn = connect();
    $result = $conn->query("SELECT * FROM attendee_counts");
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$m = create_mustache();
$tpl = $m->loadTemplate('gisday');
echo $tpl->render(array('session' => $result));

?> 