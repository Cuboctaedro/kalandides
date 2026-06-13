<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

use Kirby\Toolkit\Str;

snippet('header') ?>

<article class="container mx-auto px-4">
  <section class="py-48">
    <div class="font-light text-3xl md:text-4xl leading-relaxed  max-w-3xl "><?= $page->intro()->kirbytext() ?></div>
  </section>

  <?php
  /*
  <div class="">
    <?php if ($image = $page->portrait()->toFile()): ?>
      <img src="<?= $image->url() ?>" alt="<?= $site->title()->html() ?> portrait" class="mix-blend-multiply block">
    <?php endif ?>


  </div>
  */ ?>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

    <div class="col-span-1 lg:col-span-3 lg:order-1">
      <?php
      $items = $page->parts()->toStructure();
      foreach ($items as $item):
      ?>
        <section class="w-full " id="<?= Str::slug($item->heading()->html()) ?>">
          <h2 class="font-sans uppercase tracking-wider font-medium text-lg mb-4 border-b border-gray-300"><?= $item->heading()->html() ?></h2>
          <div class="pb-12 generated max-w-2xl lg:ml-16 lg:w-3/4"><?= $item->text()->kirbytext() ?></div>
        </section>
      <?php endforeach; ?>
    </div>

  </div>


</article>


<?php snippet('footer') ?>