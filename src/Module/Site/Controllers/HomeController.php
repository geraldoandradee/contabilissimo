<?php 

namespace Contabilissimo\Module\Site\Controllers;

use Contabilissimo\Library\Controller\BaseController;

class HomeController extends BaseController
{
  public function index() {
    $this->render('home/index.php', array('teste' => 'OKOKOK'));
  }
}