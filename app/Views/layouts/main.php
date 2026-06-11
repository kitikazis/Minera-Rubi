<?php /** @var array $data @var string $active @var string $pageTitle @var bool $transparentNav @var string $contentView */ ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>document.documentElement.className += ' js';</script>
  <title><?= e($pageTitle) ?> — Minera MH S.A.C. | Planta El Rubí</title>
  <link rel="icon" type="image/png" href="<?= asset('images/favicon.png') ?>">
  <meta name="description" content="Minera MH S.A.C. — Planta El Rubí: compra de mineral aurífero a precios justos y apoyo a la minería artesanal formalizada en Chala, Arequipa, Perú.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&family=Raleway:wght@600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= asset('css/styles.css') ?>">
</head>
<body data-page="<?= e($active) ?>"<?= $transparentNav ? ' class="has-hero"' : '' ?>>

  <?php require BASE_PATH . '/app/Views/partials/nav.php'; ?>

  <main>
    <?php require $contentView; ?>
  </main>

  <?php require BASE_PATH . '/app/Views/partials/footer.php'; ?>

  <script src="<?= asset('js/app.js') ?>"></script>
</body>
</html>
