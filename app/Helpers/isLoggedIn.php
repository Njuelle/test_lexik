<?php
namespace App\Helpers;

use Twig\Extension;

class IsLoggedIn extends \Twig_Extension
{
    public function __construct()
    {
    }

    public function getName()
    {
        return 'isLoggedIn';
    }

    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('isLoggedIn', array($this, 'isLoggedIn'))
        ];
    }

    public function isLoggedIn ()
    {
        return false;
    }
}
