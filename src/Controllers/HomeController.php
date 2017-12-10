<?php 

namespace Contabilissimo\Controllers;
use \Interop\Container\ContainerInterface as ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeController 
{
  protected $container;

  public function __construct(ContainerInterface $container) {
    $this->container = $container;
  }
   
  public function __invoke($request, $response, $args) {
    return $this->container->get('renderer')->render($response, 'home/home.phtml', $args);
  }
}