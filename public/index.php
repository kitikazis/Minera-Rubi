<?php
declare(strict_types=1);

/*
 | Front Controller — punto de entrada único de la aplicación.
 | Todas las peticiones pasan por aquí (patrón MVC).
 */

// Con el servidor embebido de PHP, deja que sirva los archivos estáticos
// (CSS, JS, imágenes) directamente si existen.
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    if ($path !== '/' && is_file(__DIR__ . $path)) {
        return false;
    }
}

define('BASE_PATH', dirname(__DIR__));

// URL base (soporta despliegue en subcarpeta)
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
define('BASE_URL', rtrim($scriptDir, '/'));

require BASE_PATH . '/app/core/helpers.php';
require BASE_PATH . '/app/core/Router.php';
require BASE_PATH . '/app/Models/SiteData.php';
require BASE_PATH . '/app/Controllers/PageController.php';

$controller = new PageController();
$router = new Router();

$router->add('',               [$controller, 'home']);
$router->add('inicio',         [$controller, 'home']);
$router->add('servicios',      [$controller, 'servicios']);
$router->add('procesos',       [$controller, 'procesos']);
$router->add('empresa',        [$controller, 'empresa']);
$router->add('sostenibilidad', [$controller, 'sostenibilidad']);
$router->add('contacto',       [$controller, 'contacto']);

$router->dispatch();
