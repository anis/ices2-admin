<?php
$config = require __DIR__ . '/config.php';

$app
    ->get('/config', function () use($app, $config) {
        return $app['twig']->render('config.twig', array(
            'ices2' => $app['ices']->isInstalled(),
            'folder' => isset($config['ices2_folder']) ? $config['ices2_folder'] : 'missing',
            'folder_exists' => isset($config['ices2_folder']) ? is_dir($config['ices2_folder']) : false,
            'folder_writeable' => isset($config['ices2_folder']) ? is_writeable($config['ices2_folder']) : false,
        ));
    });
