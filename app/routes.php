<?php

/***************************************************************************************
 * Route format:
 *
 * - 'PagesController::home' runs 'App\Controllers\PagesController->home($vars)' method,
 * - 'getHome' runs 'App\getHome($vars)' function.
 *
 * @var FastRoute\RouteCollector $r
 */

$r->addRoute('GET', '/', 'UserController::getAllUsers');
$r->addRoute('GET', '/user/new', 'UserController::newUserForm');
$r->addRoute('GET', '/user/details/{id:\d+}', 'UserController::showUserDetails');
$r->addRoute('GET', '/user/delete/{id:\d+}', 'UserController::deleteUser');
$r->addRoute('GET', '/user/delete/selected', 'UserController::massDelete');

$r->addRoute('POST', '/add/user', 'UserController::addUser');