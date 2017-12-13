<?php

namespace Contabilissimo;


class App
{
    private static $app;

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


    public static function setParams(array $params) {
        if(!self::$app) {
            throw new \Exception("App not initialized");
        }
    }

}