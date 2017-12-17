<?php

namespace Contabilissimo\Library\Routers;


interface IRoute
{
  public function match($requestUrl = null, $requestMethod = null);
}