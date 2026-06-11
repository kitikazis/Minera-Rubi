# Minera MH S.A.C. — Planta El Rubí (PHP MVC)

Sitio institucional en **PHP puro con patrón MVC** (sin dependencias).
Front y back en el mismo proyecto, contenido renderizado en el servidor.

## Estructura

```
el-rubi-php/
├─ public/                 ← raíz web (apunta el dominio aquí)
│  ├─ index.php            ← Front Controller (único punto de entrada)
│  ├─ .htaccess            ← URLs amigables (Apache)
│  └─ assets/
│     ├─ css/styles.css    ← estilos (clases reutilizables)
│     └─ js/app.js         ← nav al hacer scroll + menú móvil
├─ app/
│  ├─ core/
│  │  ├─ Router.php        ← enruta cada petición a un método del controlador
│  │  └─ helpers.php       ← e(), url(), asset()
│  ├─ Controllers/
│  │  └─ PageController.php ← una acción por página
│  ├─ Models/
│  │  └─ SiteData.php      ← TODO el contenido del sitio (datos)
│  └─ Views/
│     ├─ layouts/main.php  ← cabecera HTML + nav + footer
│     ├─ partials/         ← nav, footer, banner, cta, stats, quote
│     └─ pages/            ← home, servicios, procesos, empresa, sostenibilidad, contacto
└─ .htaccess               ← redirige a /public en hosting compartido
```

## Cómo ejecutarlo en tu PC

Necesitas PHP instalado. Desde esta carpeta:

```bash
php -S localhost:8000 -t public public/index.php
```

Luego abre: http://localhost:8000

> El último argumento (`public/index.php`) actúa como router del servidor
> embebido para que las URLs amigables y los archivos estáticos funcionen.

### Alternativa con XAMPP / WAMP
Copia la carpeta `el-rubi-php` dentro de `htdocs` y entra a
`http://localhost/el-rubi-php/public/`.

## Cómo subirlo a un hosting

- **Ideal:** apunta el dominio a la carpeta `public/`.
- **Hosting compartido:** sube todo `el-rubi-php` a `public_html`; el
  `.htaccess` de la raíz redirige automáticamente a `public/`.

## Editar contenido

Casi todo el texto vive en **`app/Models/SiteData.php`**.
Cambias ahí los servicios, valores, noticias, contactos, etc. y se
refleja en todas las páginas.

## Páginas / rutas

| Ruta | Página |
|------|--------|
| `/` o `/inicio` | Inicio (hero, estadísticas, explorar, cita) |
| `/servicios` | Compra de mineral aurífero (¿por qué elegirnos?) |
| `/procesos` | Acopio → evaluación → procesamiento → pago |
| `/empresa` | Historia, misión/visión, valores, noticias |
| `/sostenibilidad` | Apoyo a la formalización |
| `/contacto` | Departamentos + mapa de Google |
