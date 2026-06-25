<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

/** @var Kirby\Cms\Pagination $pagination */

if ($pagination->hasPages()): ?>
  <nav class="w-full pt-2 border-t border-gray-300 grid grid-cols-2 gap-2 font-sans text-sm uppercase">

    <div class="col-span-1">
      <?php if ($pagination->hasPrevPage()): ?>
        <a class="flex items-center justify-start" href="<?= $pagination->prevPageURL() ?>">
          <span class="w-5 h-5 text-gray-400"><?php snippet('icons/chevron-back'); ?></span>
          <span>newer posts</span>
        </a>

      <?php endif ?>

    </div>

    <div class="col-span-1">
      <?php if ($pagination->hasNextPage()): ?>
        <a class="flex items-center justify-end" href="<?= $pagination->nextPageURL() ?>">
          <span>older posts</span>
          <span class="w-5 h-5 text-gray-400"><?php snippet('icons/chevron-forward'); ?></span>
        </a>
      <?php endif ?>

    </div>

  </nav>
<?php endif ?>