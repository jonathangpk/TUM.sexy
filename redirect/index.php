<?php

include __DIR__ . '/routes.php';
$routeHandler = new Route();
header('Location: ' . $routeHandler->getTargetOfSub(mb_strtolower($_GET['sub']), mb_strtolower($_GET['subsub']))); // Function does check if GET parameter is set / empty
die();
