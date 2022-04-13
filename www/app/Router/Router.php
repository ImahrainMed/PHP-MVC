<?php

namespace App\Router;

use App\Controllers\DonController;
use App\Controllers\DonneurController;
use App\Controllers\HomeController;


class Router
{
    /** @var array list of registered routes */
    private const ROUTES = [
        '/\/ajouter-donneur/' => [DonneurController::class, 'addDonner'],
        '/\/ajouter-don/' => [DonController::class, 'addDonation'],

        '/\//' => [HomeController::class, 'home'],
    ];

    /** call the appropriate controller method of the requested uri */
    public static function handleRequest()
    {
        foreach (self::ROUTES as $url => $action) {
            $matches = preg_match($url, $_SERVER['REQUEST_URI'], $params);
            if ($matches > 0) {
                $controller = new $action[0]; // new OrderController()
                $controller->{$action[1]}($params);
                break;
            }
        }
    }
}
