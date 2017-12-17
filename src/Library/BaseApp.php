<?php

namespace Contabilissimo\Library;

use Contabilissimo\Library\Http\Request;
use Contabilissimo\Library\Http\Response;
use Contabilissimo\Library\Routers\Router;

abstract class BaseApp
{
  /**
   * @var Response
   **/
  private $response;
  private $request;
  /**
    * @var Router
    **/
  protected $router;
  protected $routes;
  protected $params = array();

  /**
   * @return Response
   */
  public function getResponse()
  {
    return $this->response;
  }

  /**
   * @param Response $response
   */
  public function setResponse(Response $response)
  {
    $this->response = $response;
  }

  /**
   * @return Request|null
   */
  public function getRequest()
  {
    return $this->request;
  }

  /**
   * @param Request $request
   */
  public function setRequest(Request $request)
  {
    $this->request = $request;
  }

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