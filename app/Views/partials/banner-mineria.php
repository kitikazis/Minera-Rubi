<?php
// Partial: Banner MINERÍA RESPONSABLE
// Expected input: $banner = ['eyebrow'=>'','title'=>'','sub'=>'','image'=>'','cta'=>['href'=>'','label'=>'']]
$bg = $banner['image'] ?? $data['hero']['image'] ?? asset('images/hero-responsible.jpg');
?>
<section class="banner banner--responsible" aria-label="Minería Responsable" style="background-image:linear-gradient(160deg, rgba(0,0,0,.6) 0%, rgba(0,0,0,.35) 60%), url('<?= e($bg) ?>');">
  <div class="banner-content">
    <?php if(!empty($banner['eyebrow'])): ?>
      <p class="eyebrow eyebrow--gold"><?= e($banner['eyebrow']) ?></p>
    <?php endif; ?>

    <h1 class="banner-title"><?= e($banner['title'] ?? 'MINERÍA RESPONSABLE') ?></h1>

    <?php if(!empty($banner['sub'])): ?>
      <p class="banner-sub"><?= e($banner['sub']) ?></p>
    <?php endif; ?>

    <?php if(!empty($banner['cta']['href']) && !empty($banner['cta']['label'])): ?>
      <div class="banner-ctas">
        <a class="btn btn--primary" href="<?= url($banner['cta']['href']) ?>"><?= e($banner['cta']['label']) ?></a>
      </div>
    <?php endif; ?>
  </div>
</section>
