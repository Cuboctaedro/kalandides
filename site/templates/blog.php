<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Pages $articles */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

/** @var Kirby\Cms\Pagination $pagination */

snippet('header') ?>

<div class="container mx-auto px-4">
  <header class="py-48">
    <h1 class="font-light text-3xl md:text-4xl"><?= $page->title()->html() ?></h1>
  </header>

  <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">

    <div class="col-span-1 lg:col-span-2">

      <section class="w-full">
        <?php
        foreach ($articles as $post):
        ?>
          <article class="pb-12">
            <a class="block group" href="<?= $post->url() ?>">
              <h2 class="inline-block font-serif text-lg lg:text-xl mb-2 border-b border-solid border-transparent pb-1 group-hover:border-gray-400 transition-colors"><?= $post->title()->html() ?></h2>
              <div class="font-sans text-xs font-bold tracking-wider uppercase text-slate-500"><?= $post->date()->toDate('F j, Y') ?></div>
            </a>
          </article>
        <?php endforeach; ?>

      </section>

      <?php snippet('pagination', ['pagination' => $pagination]); ?>


    </div>

  </div>


</div>

<?php snippet('footer') ?>