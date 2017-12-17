<?php

require __DIR__ . '/../vendor/autoload.php';

$settings = require __DIR__ . '/../config/settings.php';
$app = \Contabilissimo\Library\App::getInstance();
$app->setSettings($settings);

$app->run();
