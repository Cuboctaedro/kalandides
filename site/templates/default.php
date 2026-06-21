<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

use Kirby\Toolkit\Str;

snippet('header') ?>

<article class="container mx-auto px-4">
  <header class="py-48">
    <h1 class="font-light text-3xl md:text-4xl"><?= $page->title()->html() ?></h1>
  </header>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

    <div class="col-span-1 lg:order-2 ">
      <?php snippet('page-menu') ?>

    </div>

    <div class="col-span-1 lg:col-span-3 lg:order-1">
      <?php
      $items = $page->parts()->toStructure();
      foreach ($items as $item):
      ?>
        <section class="w-full " id="<?= Str::slug($item->heading()->html()) ?>">
          <h2 class="font-sans uppercase tracking-wide font-bold text-lg lg:text-xl mb-4 "><?= $item->heading()->html() ?></h2>
          <div class="pb-12 generated max-w-2xl lg:w-3/4"><?= $item->text() ?></div>
        </section>
      <?php endforeach; ?>
    </div>

  </div>


</article>


<?php snippet('footer') ?>