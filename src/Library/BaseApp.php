<?php

namespace Contabilissimo\Library;


abstract class BaseApp
{
  protected $response;
  protected $request;
  protected $router;

  protected function setConfigItem($key, $value)
  {
    if (property_exists($this, $key)) {
      $this->$key = $value;
    }
  }

  protected function run()
  {
    throw new \Exception("");
  }
}