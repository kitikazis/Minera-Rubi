<?php
declare(strict_types=1);

/*
 | Controlador de páginas. Cada método representa una ruta del sitio:
 | recoge los datos del modelo y renderiza la vista dentro del layout.
 */
class PageController
{
    private array $data;

    public function __construct()
    {
        $this->data = SiteData::all();
    }

    /** Renderiza una página dentro del layout principal. */
    private function render(string $page, array $vars = []): void
    {
        $data = $this->data;              // disponible en todas las vistas
        $active = $vars['active'] ?? '';
        $pageTitle = $vars['title'] ?? '';
        $transparentNav = $vars['transparentNav'] ?? false;

        // La ruta de la vista de contenido que incluirá el layout
        $contentView = BASE_PATH . "/app/Views/pages/{$page}.php";

        require BASE_PATH . '/app/Views/layouts/main.php';
    }

    public function home(): void
    {
        $this->render('home', ['active' => 'inicio', 'title' => 'Inicio', 'transparentNav' => true]);
    }

    public function servicios(): void
    {
        $this->render('servicios', ['active' => 'servicios', 'title' => 'Servicios']);
    }

    public function procesos(): void
    {
        $this->render('procesos', ['active' => 'procesos', 'title' => 'Procesos']);
    }

    public function empresa(): void
    {
        $this->render('empresa', ['active' => 'empresa', 'title' => 'Empresa']);
    }

    public function sostenibilidad(): void
    {
        $this->render('sostenibilidad', ['active' => 'sostenibilidad', 'title' => 'Sostenibilidad']);
    }

    public function contacto(): void
    {
        $this->render('contacto', ['active' => 'contacto', 'title' => 'Contacto']);
    }
}
