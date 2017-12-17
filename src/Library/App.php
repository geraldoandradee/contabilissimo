<?php

namespace Contabilissimo\Library;


class App extends BaseApp
{
  private static $app = null;

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
    $this->setupRoutes();
    $match = $this->router->match();

    if( $match && is_callable( $match['target'] ) ) {
      call_user_func_array( $match['target'], $match['params'] );
    } else {
      // no route was matched
      header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    }
  }

}
