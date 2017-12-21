<?php

namespace App\Helpers;

use \Twig_Loader_Filesystem;
use \Twig_Environment;

class TwigLoader
{
    private static $instance;

    private function __construct() {}

    /**
     * Get the instance of twig environment
     *
     * @return \Twig_Environment
     */
    public static function getInstance()
    {
        if ( !self::$instance ) {
            $loader = new Twig_Loader_Filesystem(APP . '/views/');
            self::$instance = new Twig_Environment($loader, array(
                'cache' => '../storage/cache',
                'debug' => (DEBUG) ? true : false,
            ));
            self::$instance->addExtension(new \App\Helpers\isLoggedIn());
        }

        return self::$instance;
    }
}
