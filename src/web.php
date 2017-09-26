<?php

require __DIR__ . '/bootstrap.php';

$controller = new \Mawman\Seed\Http\FrontController(\App\Environment::getInstance()->getContainer());
$controller->handleRequest();

