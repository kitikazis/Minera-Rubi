<?php /** @var array $data */ $banner = $data['banners']['contacto']; $info = $data['info']; ?>

<?php require BASE_PATH . '/app/Views/partials/banner.php'; ?>

<section class="section section--gray">
  <div class="container">
    <div class="section-head">
      <p class="eyebrow">— CONTACTO —</p>
      <h2><?= e($data['contactTitle']) ?></h2>
    </div>

    <div class="contact-grid">
      <!-- Información -->
      <div>
        <h3 class="contact-h">Información de Contacto</h3>

        <div class="info-row">
          <span class="info-ico">◎</span>
          <div><div class="info-label">Ubicación</div><div class="info-val"><?= e($info['office']) ?></div></div>
        </div>
        <div class="info-row">
          <span class="info-ico">◆</span>
          <div><div class="info-label">Horario</div><div class="info-val"><?= e($info['hours']) ?></div></div>
        </div>

        <h4 class="dept-title">Departamentos</h4>
        <div class="dept-list">
          <?php foreach ($info['departments'] as $d): ?>
            <div class="dept-card">
              <div class="dept-area"><?= e($d['area']) ?></div>
              <a href="tel:<?= e(str_replace(' ', '', $d['phone'])) ?>" class="dept-phone">◈ <?= e($d['phone']) ?></a>
              <a href="mailto:<?= e($d['email']) ?>" class="dept-email">◉ <?= e($d['email']) ?></a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Mapa -->
      <div class="map-wrap">
        <iframe
          title="Planta El Rubí — Chala, Arequipa"
          src="<?= e($info['mapsEmbed']) ?>"
          width="100%" height="100%" style="border:0;display:block;min-height:460px"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
