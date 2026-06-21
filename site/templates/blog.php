<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

use Kirby\Toolkit\Str;

snippet('header') ?>

<div class="container mx-auto px-4">
  <header class="py-48">
    <h1 class="font-light text-3xl md:text-4xl"><?= $page->title()->html() ?></h1>
  </header>

  <section class="grid grid-cols-1 lg:grid-cols-4 gap-8">
    <?php
    $posts = $page->children()->listed();
    foreach ($posts as $post):
    ?>
      <article class="col-span-1 lg:col-span-3">
        <a class="block group" href="<?= $post->url() ?>">
          <h2 class="font-serif text-lg lg:text-xl mb-2 group-hover:underline"><?= $post->title()->html() ?></h2>
          <div class="font-sans text-xs font-bold tracking-wider uppercase text-slate-500"><?= $post->date()->toDate('F j, Y') ?></div>
        </a>
      </article>
    <?php endforeach; ?>

  </section>


</div>


<?php snippet('footer') ?>