<?php

use Slim\Http\Request;
use Slim\Http\Response;

$app->get('/', Contabilissimo\Controllers\HomeController::class);
