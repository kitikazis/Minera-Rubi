<?php
declare(strict_types=1);

/*
 | Router mínimo: asocia una ruta (string) con un manejador (callable)
 | y despacha la petición actual.
 */
class Router
{
    /** @var array<string, callable> */
    private array $routes = [];

    public function add(string $path, callable $handler): void
    {
        $this->routes[trim($path, '/')] = $handler;
    }

    public function dispatch(): void
    {
        $uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';

        // Quita la URL base (cuando se despliega en una subcarpeta)
        $base = BASE_URL;
        if ($base !== '' && strpos($uri, $base) === 0) {
            $uri = substr($uri, strlen($base));
        }

        $path = trim($uri, '/');

        // Permite acceder como /index.php
        if ($path === 'index.php') {
            $path = '';
        }

        $handler = $this->routes[$path] ?? null;

        if ($handler === null) {
            http_response_code(404);
            // Reusa la home como página de respaldo
            $handler = $this->routes[''];
        }

        call_user_func($handler);
    }
}
