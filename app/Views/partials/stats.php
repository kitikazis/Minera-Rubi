<?php /** @var array $data */ ?>
<section class="stats-section" id="stats">
  <div class="container stats">
    <?php foreach ($data['stats'] as $s): ?>
      <div class="stat">
        <div class="stat-bar"></div>
        <div class="stat-val"><?= e($s['val']) ?></div>
        <div class="stat-label"><?= e($s['label']) ?></div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
