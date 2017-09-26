<?php

require __DIR__ . '/bootstrap.php';

$app = new \Symfony\Component\Console\Application();

$app->add(new \Mawman\Seed\Console\Command\ServeCommand());

$app->run();
