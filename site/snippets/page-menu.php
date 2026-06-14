<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

use Kirby\Toolkit\Str;

?>

<div class="fixed bottom-4 right-4 lg:sticky lg:top-4 lg:bottom-auto lg:right-auto ">
    <nav class=" font-sans" role="navigation">
        <button class="absolute bottom-0 right-0 flex lg:hidden w-8 h-8 items-center justify-center bg-slate-900 text-slate-100 hover:bg-slate-700 rounded-full cursor-pointer" aria-expanded="false" id="page-menu-toggle">
            <span class="sr-only">Toggle page menu</span>
            <span class="w-5 h-5 flex items-center justify-center"><?php snippet('icons/burger') ?></span>

        </button>

        <div class="hidden group-[.page-menu-open]/body:block lg:block mb-9 lg:mb-0 bg-white lg:bg-transparent p-4 lg:p-0 rounded-sm shadow-lg lg:shadow-none z-50" id="page-menu" role="menu" aria-label="Page menu">
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
</div>