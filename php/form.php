<?php

require_once 'create_mustache.php';

try {
    $conn = connect();
    $result = $conn->query("SELECT * FROM attendee_counts;");
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$m = create_mustache();
$tpl = $m->loadTemplate('form');

// Get only non-full sessions
$available = array();
foreach($result as $session) {
    if(intval($session['count']) < intval($session['max_attendees'])) {
        array_push($available, $session);
    }
}

echo $tpl->render(array('sessions_with_space' => $available));

?>