<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

snippet('header') ?>

<article class="container mx-auto px-4">
  <header class="py-48">
    <h1 class="font-light text-3xl md:text-4xl"><?= $page->title()->html() ?></h1>
  </header>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

    <div class="col-span-1 lg:col-span-3 ">
      <div class="pb-12 generated max-w-2xl lg:w-3/4"><?= $page->text()->kirbytext() ?></div>
    </div>


</article>


<?php snippet('footer') ?>