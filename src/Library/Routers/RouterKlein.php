<?php

namespace Contabilissimo\Library\Routers;


use Klein\Klein;

class RouterKlein extends Klein implements IRoute
{

  public function dispach()
  {
    parent::dispatch();
  }
}