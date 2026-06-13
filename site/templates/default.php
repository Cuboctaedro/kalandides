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

    <nav class="col-span-1 lg:order-2 " role="navigation">
      <div class="sticky top-4  font-sans">
        <h2 class="uppercase tracking-wider font-bold text-sm mb-2 pb-2 w-full border-b border-gray-300"><?= $page->title()->html() ?><span class="sr-only"> - Page contents</span></h2>
        <ul>
          <?php
          $items = $page->parts()->toStructure();
          foreach ($items as $item):
          ?>
            <li class="mb-2">
              <a href="#<?= Str::slug($item->heading()->html()) ?>" class="text-slate-900 hover:text-slate-700"><?= $item->heading()->html() ?></a>
            </li>
          <?php endforeach ?>
        </ul>
      </div>
    </nav>

    <div class="col-span-1 lg:col-span-3 lg:order-1">
      <?php
      $items = $page->parts()->toStructure();
      foreach ($items as $item):
      ?>
        <section class="w-full " id="<?= Str::slug($item->heading()->html()) ?>">
          <h2 class="font-sans uppercase tracking-wide font-bold text-lg lg:text-xl mb-4 "><?= $item->heading()->html() ?></h2>
          <div class="pb-12 generated max-w-2xl lg:w-3/4"><?= $item->text()->kirbytext() ?></div>
        </section>
      <?php endforeach; ?>
    </div>

  </div>


</article>


<?php snippet('footer') ?>