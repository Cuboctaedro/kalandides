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

    <div class="col-span-1 lg:col-span-3 ">
      <?php
      $items = $page->faq()->toStructure();
      $index = 0;
      foreach ($items as $item):
      ?>
        <details class="pb-8 group" <?php e($index === 0, 'open') ?>>
          <summary class="font-sans text-lg pb-6 font-bold cursor-pointer block"><?= $item->question()->html() ?></summary>
          <div class="pb-4 generated max-w-2xl lg:w-3/4">
            <?= $item->answer()->kirbytext() ?>
          </div>
        </details>
      <?php
        $index++;
      endforeach;
      ?>
    </div>

  </div>


</article>


<?php snippet('footer') ?>