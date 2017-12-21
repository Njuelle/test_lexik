<?php

namespace App\Controllers\Abstracted;


use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Kevinrob\GuzzleCache\CacheMiddleware;

abstract class ApiClientController extends Controller
{
    protected $apiClient;

    public function __construct()
    {
        parent::__construct();

        $stack = HandlerStack::create();
        $stack->push(new CacheMiddleware(), 'cache');
        $client = new Client(['handler' => $stack]);
        $this->apiClient = $client;
    }
}