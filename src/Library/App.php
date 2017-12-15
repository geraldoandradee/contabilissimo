<?php

namespace Contabilissimo\Library;


class App extends BaseApp
{
  private static $app;
  private static $params = array();

  private function __construct()
  {
  }

  public static function getInstance()
  {
    if (!self::$app) {
      self::$app = new App();
    }

    return self::$app;
  }

  public static function setParams(array $params)
  {
    if (!self::$app) {
      throw new \Exception("App not initialized");
    } else {
      self::$params = $params;
    }
  }

  public function setSettings(array $settings)
  {
    if (array_key_exists('settings', $settings)) {
      foreach ($settings['settings'] as $key => $value) {
        $this->setConfigItem($key, $value);
      }
    }
  }

  public function run()
  {
    echo "OK";
  }


}