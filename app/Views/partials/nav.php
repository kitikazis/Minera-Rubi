<?php /** @var array $data @var string $active @var bool $transparentNav */ ?>
<nav class="nav<?= $transparentNav ? '' : ' nav--solid' ?>" id="nav">
  <div class="nav-inner">
    <a class="brand" href="<?= url('') ?>" aria-label="El Rubí — Inicio">
      <img class="brand-logo brand-logo--light" src="<?= asset('images/logo-el-rubi-blanco.svg') ?>" alt="El Rubí — Planta Minera" width="160" height="56">
      <img class="brand-logo brand-logo--dark" src="<?= asset('images/logo-el-rubi.svg') ?>" alt="El Rubí — Planta Minera" width="160" height="56">
    </a>

    <div class="nav-links" id="navLinks">
      <?php foreach ($data['nav'] as $item): ?>
        <a class="nav-link<?= $active === $item['id'] ? ' is-active' : '' ?>" href="<?= url($item['route']) ?>"><?= e($item['label']) ?></a>
      <?php endforeach; ?>
    </div>

    <a class="cta-btn" href="<?= url('contacto') ?>">Cotizar</a>

    <button class="hamburger" id="hamburger" aria-label="Menú">
      <span></span><span></span><span></span>
    </button>
  </div>

  <div class="nav-mobile" id="navMobile">
    <?php foreach ($data['nav'] as $item): ?>
      <a class="<?= $active === $item['id'] ? 'is-active' : '' ?>" href="<?= url($item['route']) ?>"><?= e($item['label']) ?></a>
    <?php endforeach; ?>
    <a class="cta-btn" href="<?= url('contacto') ?>">Cotizar</a>
  </div>
</nav>
