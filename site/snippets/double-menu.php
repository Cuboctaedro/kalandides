<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

?>




<div class="font-sans">

    <button class="flex w-8 h-8 items-center justify-center lg:hidden relative z-10 mr-4 lg:mr-0 cursor-pointer" aria-expanded="false" id="menu-toggle">
        <span class="sr-only">Toggle main menu</span>
        <span class="group-[.main-menu-open]/body:hidden flex w-8 h-8 items-center justify-center text-stone-800"><?php snippet('icons/burger') ?></span>
        <span class="group-[.main-menu-open]/body:flex hidden w-8 h-8 items-center justify-center text-stone-800"><?php snippet('icons/close') ?></span>

    </button>

    <nav class="main-menu fixed z-0 inset-0 -translate-y-full group-[.main-menu-open]/body:translate-y-0 lg:translate-y-0 bg-stone-300 p-4 lg:static lg:w-auto lg:bg-transparent lg:p-0 pt-28 lg:pt-0 transition-transform duration-300 ease-in-out flex flex-col justify-center" id="main-menu">

        <ul class="flex flex-col gap-4 lg:flex-row lg:gap-6 pb-16 lg:pb-0 lg:order-2 container mx-auto lg:w-auto lg:mx-0" role="menu" aria-label="Main menu">
            <?php
            $main_menu = $site->mainMenu()->toPages();
            foreach ($main_menu as $item):
            ?>
                <li>
                    <a class="text-slate-900 hover:text-slate-700 text-lg lg:text-base py-2 lg:p-0" href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
                </li>
            <?php endforeach ?>
        </ul>

        <ul class="flex flex-col gap-4 lg:flex-row container mx-auto lg:w-auto lg:mx-0 lg:gap-6 lg:pb-2 lg:justify-end text-xs font-bold tracking-wider uppercase lg:order-1" role="menu" aria-label="Language menu">
            <?php foreach ($kirby->languages() as $language): ?>
                <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                    <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>" class=" <?php e($kirby->language() == $language, 'text-slate-900') ?>">
                        <?= html($language->name()) ?>
                    </a>
                    </li>
                <?php endforeach ?>
        </ul>

    </nav>
</div>