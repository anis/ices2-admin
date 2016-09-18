<?php
$app->register(new \Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__ . '/../../src/views',
));

$app['ezstream'] = new \Ices2Admin\Service\EzStreamService();
$app['ices'] = new \Ices2Admin\Service\IcesService();
