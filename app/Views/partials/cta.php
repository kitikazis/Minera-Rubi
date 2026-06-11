<?php /** @var array $data */ $cta = $data['cta']; ?>
<section class="cta-band">
  <div class="container cta-inner">
    <h2><?= e($cta['title']) ?></h2>
    <p><?= e($cta['sub']) ?></p>
    <a class="btn btn--white" href="<?= url('contacto') ?>"><?= e($cta['btn']) ?></a>
  </div>
</section>
