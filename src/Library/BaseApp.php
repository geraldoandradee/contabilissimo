<?php

namespace Contabilissimo\Library;

use Contabilissimo\Library\Routers\Router;

abstract class BaseApp
{
  protected $response;
  protected $request;
  /**
    * @var Router
    **/
  protected $router;
  protected $routes;
  protected $params = array();

  protected function setConfigItem($key, $value)
  {
    if (property_exists($this, $key)) {
      $this->$key = $value;
    }
  }

  protected function run()
  {
    throw new \Exception("Not implemented");
  }

  protected function setupRoutes()
  {
    /** @var \Contabilissimo\Library\Routers\Route $route */
    foreach ($this->routes as $route) {
      $this->router->map($route->getMethod(), $route->getPath(), function() use ($route) {
        $controller = $route->getFullControllerName();
        $method = $route->getControllerMethod();

        (new $controller())->$method();
      }, $route->getName());
    }
  }
}