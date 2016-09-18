<?php
$config = require __DIR__ . '/config.php';

$app
    ->get('/config', function () use($app, $config) {
        return $app['twig']->render('config.twig', array(
            'installed' => $app['ices']->isInstalled() ? 'true' : 'false',
            'folder' => isset($config['ices2_folder']) ? $config['ices2_folder'] : 'missing',
        ));
    });
