<?php /** @var array $data */ $q = $data['quote']; ?>
<section class="quote-band">
  <div class="quote-inner">
    <div class="quote-mark"></div>
    <blockquote>&ldquo;<?= e($q['text']) ?>&rdquo;</blockquote>
    <div class="quote-author">
      <div class="quote-avatar"><?= e(mb_substr($q['author'], 0, 1)) ?></div>
      <div>
        <div class="qa-name"><?= e($q['author']) ?></div>
        <div class="qa-role"><?= e($q['role']) ?></div>
      </div>
    </div>
  </div>
</section>
