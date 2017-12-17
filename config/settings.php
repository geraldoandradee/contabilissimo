<?php

use Contabilissimo\Library\Routers\Route;

return [
    'settings' => [
      // router settings
      'router' => \Contabilissimo\Library\Routers\Router::getInstance(), // default router
      'routes' => [
        new Route('GET', '/', 'home', 'Contabilissimo\Module\Site\Controllers\HomeController::index'),
      ]
    ],
];
