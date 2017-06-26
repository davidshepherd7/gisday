<?php

require_once 'db.php';
require_once 'create_mustache.php';


if ($_POST) {
    try {
        $conn = connect();
        $stmt = $conn->prepare("INSERT INTO attendees (name, email, employer) VALUES (?, ?, ?)");
        $stmt->execute(array($_POST['name'], $_POST['email'], $_POST['employer']));
        $user_id = $conn->lastInsertId();

        $session_stmt = $conn->prepare("INSERT INTO attendee_attending_session (attendee_id, session_id) VALUES (?, ?)");
        foreach($_POST['sessions'] as $session_id) {
            $session_stmt->execute(array($user_id, $session_id));
        }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Redirect to this page, but as a GET
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}


$m = create_mustache();
$tpl = $m->loadTemplate('submit');
echo $tpl->render();

?>
