<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PublicController;

$router = new Router();

$router->get('/', [PublicController::class, 'Index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();