<?php

class RoboFile
{
  function test()
  {
    // starts PHP server in background
    $this->taskPhpServer(9999)
      ->background()
      ->dir('public')
      ->run();

    // launches Selenium server
//    $this->taskExec('php vendor/phpunit/phpunit/phpunit --configuration phpunit.xml D:\jobs\contabilissimo\tests')
//      ->background()
//      ->run();

    // runs PHPUnit tests
//    $this->taskPHPUnit()->run();
  }

}