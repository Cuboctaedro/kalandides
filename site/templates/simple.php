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

    <div class="col-span-1 lg:col-span-3 lg:order-1">
      <div class="pb-12 generated max-w-2xl lg:w-3/4">
        <?php foreach ($page->body()->toBlocks() as $block): ?>
          <div id="<?= $block->id() ?>" class="block block-type-<?= $block->type() ?>">
            <?php snippet('blocks/' . $block->type(), [
              'block' => $block->content(),
            ]) ?>
          </div>
        <?php endforeach ?>
      </div>
    </div>

  </div>


</article>


<?php snippet('footer') ?>