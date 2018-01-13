<?php 

namespace Contabilissimo\Controllers;


use Contabilissimo\Library\Controller\BaseController;

class NotFoundController extends BaseController
{
  public function index() {
    echo '404';
  }
}