<?php

namespace Controllers;
use MVC\Router;


class PublicController {

    public static function Index(Router $router) {
        $router->render('pages/index', []);
    }
}