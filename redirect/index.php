<?php

include __DIR__ . '/routes.php';
$routeHandler = new Route();
header('Location: ' . $routeHandler->getTargetOfSub(mb_strtolower($_GET['redirectUrl']), mb_strtolower($_GET['siteType']))); // Function does check if GET parameter is set / empty
die();
