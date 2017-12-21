<?php 
/********************************************************************
 * Configure all the things!
 */

date_default_timezone_set('UTC');

define('DEBUG', true);

/***** DATABASE & ORM *****/
define('NEED_ORM', false);

const DB_CONF = (!NEED_ORM) ? false : array(
    'driver'    => "mysql",
    'host'      => "localhost",
    'database'  => "eloquent",
    'username'  => "root",
    'password'  => "root",
    'charset'   => "utf8",
    'collation' => "utf8_unicode_ci",
    'prefix'    => ""
);