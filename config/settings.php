<?php

use Contabilissimo\Library\Routers\Route;

return [
  'settings' => [
    // router settings
    'router' => \Contabilissimo\Library\Routers\Router::getInstance(), // default router
    'routes' => [
      new Route('GET', '/', 'home', 'Contabilissimo\Module\Site\Controllers\HomeController::index'),
      new Route('GET', '/404', '404', 'Contabilissimo\Controllers\NotFoundController::index'),
    ],
    'render' => \Contabilissimo\Library\Template\Render::getInstance()->configure(
      array(
        'cache_dir' => __DIR__ .'/../cache',
        'template_dir' => array(__DIR__ . '/../src/Module/Site/Views'),
        'debug' => false,
        'check_ttl' => 3600,
      )),
  ],
];
