<?php
require 'db.php';
require 'vendor/autoload.php';


try {
    $conn = connect();
    $result = $conn->query("SELECT * FROM attendee_counts");

    $m = new Mustache_Engine(array(
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__)),
    ));
    $tpl = $m->loadTemplate('gisday');
    echo $tpl->render(array('session' => $result));
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?> 