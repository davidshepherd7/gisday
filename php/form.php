<?php

require_once 'create_mustache.php';

$m = create_mustache();
$tpl = $m->loadTemplate('form');
echo $tpl->render();

?>