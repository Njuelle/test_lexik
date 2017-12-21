<?php

/***************************************************************************************
 * Route format:
 *
 * - 'PagesController::home' runs 'App\Controllers\PagesController->home($vars)' method,
 * - 'getHome' runs 'App\getHome($vars)' function.
 *
 * @var FastRoute\RouteCollector $r
 */

$r->addRoute('GET', '/beers', 'BeerController::getAll');
$r->addRoute('GET', '/beer/{id:\d+}', 'BeerController::getOne');
$r->addRoute('GET', '/test', 'BeerController::test');
