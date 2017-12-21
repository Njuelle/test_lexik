<p align="center">
	<h1>Bombi-Framework</h1>
</p>

A lightweight PHP framework, like a boilerplate with composer using :
* Twig
* Fastroute
* Monolog
* Whoops
* Guzzle
* EloquentOrm
* Var-dumper 
* Gulp (for SASS & JS)

Installation
------------
At the root of the project :
```bash
composer install
```
```bash
npm install
```
```bash
gulp build
```

(you also need a vhost)

Configuration
------------
In '/app/config.php' :
* Set your default timezone
* Set DEBUG to 'true' for development environment, 'false' for production
* If you need an orm set NEED_ORM to 'true' and configure your DB access

In dev environment, cache is disabled and errors are displayed with Whoops, else in production everything is logged
in '/storage/logs' and users doesn't see errors

Everything is cached for optimizing ('/storage/cache')

Usage 
------------
For testing beers routes and controller :
* If you don't have one, create a vhost for your server!
* Import 'beer.sql' in your DB
* You can now test routes : '/beers' or '/beer/id' (id = 1-3)

You can use gulp for generate CSS and JS :
```bash
gulp build
```
or 
```bash
gulp watch
```
it use SASS and Auto-Prefixer for easy and smooth css :)




