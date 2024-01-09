<?php

require_once('./controller/ClientController.php');

// $action = 'getAll';

$action = !empty($_GET['a']) ? $_GET['a'] : 'getAll';

$controller = new ClientController();

$controller->{$action}();

?>