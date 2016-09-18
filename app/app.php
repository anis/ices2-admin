<?php
$app = new \Silex\Application();
require __DIR__ . '/config/providers.php';
require __DIR__ . '/config/routing.php';

return $app;
