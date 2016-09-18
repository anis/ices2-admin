<?php
$app->register(new \Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../../src/views',
));

$app['ices'] = new \Ices2Admin\Service\IcesService();
