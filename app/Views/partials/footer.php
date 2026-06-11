<?php /** @var array $data */ $f = $data['footer']; $info = $data['info']; ?>
<footer class="footer">
  <div class="container footer-grid">
    <div>
      <div class="footer-brand">
        <img src="<?= asset('images/logo-oficial.png') ?>" alt="El Rubí — Planta Minera" class="footer-logo" loading="lazy">
      </div>
      <p class="footer-desc"><?= e($f['desc']) ?></p>
      <div class="socials">
        <?php foreach ($f['socials'] as $s): ?>
          <a class="social social--<?= e($s['icon']) ?>" href="<?= e($s['href']) ?>" target="_blank" rel="noopener noreferrer" title="<?= e($s['title']) ?>" aria-label="<?= e($s['title']) ?>"><?= social_icon($s['icon']) ?></a>
        <?php endforeach; ?>
      </div>
    </div>

    <div>
      <h4>Enlaces</h4>
      <?php foreach ($data['explore'] as $l): ?>
        <a class="footer-link" href="<?= url($l['route']) ?>"><?= e($l['label']) ?></a>
      <?php endforeach; ?>
    </div>

    <div>
      <h4>Zonas de Acopio</h4>
      <?php foreach ($f['locs'] as $loc): ?>
        <div class="footer-loc"><span>◆</span> <?= e($loc) ?></div>
      <?php endforeach; ?>
    </div>

    <div>
      <h4>Contacto</h4>
      <p class="footer-muted"><?= e($info['email']) ?></p>
      <p class="footer-muted"><?= e($info['phone']) ?></p>
      <p class="footer-muted footer-dim"><?= e($info['hours']) ?></p>
    </div>
  </div>

  <div class="container footer-bottom">
    <p><?= e($f['copy']) ?></p>
    <div class="footer-legal">
      <a href="#">Política de Privacidad</a>
      <a href="#">Términos de Uso</a>
    </div>
  </div>
</footer>
