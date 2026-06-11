<?php
/**
 * Banner superior de las páginas internas.
 * Espera: $banner = ['eyebrow'=>..,'title'=>..,'sub'=>..] y $data['hero']['image'].
 * @var array $data @var array $banner
 */
?>
<section class="banner" style="background-image:linear-gradient(160deg, rgba(0,0,0,0.78) 0%, rgba(0,0,0,0.55) 55%, rgba(235,175,0,0.10) 100%), url('<?= e($data['hero']['image']) ?>');">
  <div class="banner-content">
    <p class="eyebrow eyebrow--gold"><?= e($banner['eyebrow']) ?></p>
    <h1><?= e($banner['title']) ?></h1>
    <p class="banner-sub"><?= e($banner['sub']) ?></p>
  </div>
</section>
