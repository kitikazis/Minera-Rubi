<?php
declare(strict_types=1);

/*
 | Helpers globales reutilizables en las vistas.
 */

/** Escapa texto para imprimirlo de forma segura en HTML. */
function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

/** Construye una URL interna (ruta) respetando la URL base. */
function url(string $path = ''): string
{
    $path = ltrim($path, '/');
    return BASE_URL . '/' . $path;
}

/** Construye la ruta a un recurso estático (css, js, img) con cache-busting. */
function asset(string $path): string
{
    $path = ltrim($path, '/');
    $url  = BASE_URL . '/assets/' . $path;

    // Añade ?v=<fecha de modificación> para invalidar el caché del navegador
    // automáticamente cada vez que el archivo cambia (al subir actualizaciones).
    $file = BASE_PATH . '/public/assets/' . $path;
    if (is_file($file)) {
        $url .= '?v=' . filemtime($file);
    }

    return $url;
}
