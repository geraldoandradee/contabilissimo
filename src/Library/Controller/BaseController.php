<?php

namespace Contabilissimo\Library\Controller;


use Contabilissimo\Library\App;
use Contabilissimo\Library\Http\Response;
use Contabilissimo\Library\Template\Render;

abstract class BaseController
{
  protected $params;
  protected $templateEngine;

  /**
   * @return mixed
   */
  public function getRequest()
  {
    return App::getInstance()->getRequest();
  }

  /**
   * @return mixed
   */
  public function getResponse()
  {
    return App::getInstance()->getResponse();
  }

  public function render($templateName, $opts)
  {
    Response::getInstance()->body(Render::getInstance()->render($templateName, $opts))->sendBody();
  }
}
