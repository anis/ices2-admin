<?php
$app
    ->get('/config', function () use($app) {
        return $app['twig']->render('config.twig', array(
            'installed' => $app['ices']->isInstalled() ? 'true' : 'false'
        ));
    });
