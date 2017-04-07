<?php

require __DIR__ . '/../vendor/autoload.php';

function create_mustache() {
    $m = new Mustache_Engine(array(
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__)),
    ));

    return $m;
}

?>
