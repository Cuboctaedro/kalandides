<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

?>

<nav class="container relative mx-auto flex items-center justify-between h-18" role="navigation">

    <div class="relative z-10">
        <?php snippet('site-title') ?>
    </div>


    <div class="group/menu font-sans" :class="$store.menu.open ? 'is-open' : 'is-closed'">

        <button class="flex w-8 h-8 items-center justify-center lg:hidden relative z-10 mr-4 lg:mr-0 cursor-pointer" aria-expanded="false" @click="$store.menu.toggle">
            <span class="sr-only">Toggle main menu</span>
            <span :class="$store.menu.open ? 'hidden' : 'flex w-8 h-8 items-center justify-center'"><?php snippet('icons/burger') ?></span>
            <span :class="$store.menu.open ? 'flex w-8 h-8 items-center justify-center' : 'hidden'"><?php snippet('icons/close') ?></span>

        </button>

        <div class="fixed z-0 inset-0 -translate-y-full group-[.is-open]/menu:translate-y-0 lg:translate-y-0 bg-stone-200 p-4 lg:static lg:w-auto lg:bg-transparent lg:p-0 pt-28 lg:pt-0 transition-transform duration-300 ease-in-out lg:flex lg:items-center lg:gap-6">
            <ul class="flex flex-col gap-4 lg:flex-row lg:gap-6 pb-8 lg:pb-0">
                <?php
                $main_menu = $site->mainMenu()->toPages();
                foreach ($main_menu as $item):
                ?>
                    <li>
                        <a class="text-slate-900 hover:text-slate-700 text-lg lg:text-base p-2 lg:p-0" href="<?= $item->url() ?>"><?= html($item->title()) ?></a>
                    </li>
                <?php endforeach ?>
            </ul>

            <div x-data="{langopen: false }" class="group/lang" :class="langopen ? 'is-open' : 'is-closed'">
                <button class="hidden w-12 h-8 items-center justify-center lg:flex relative z-10 bg-slate-900 text-slate-100 hover:bg-slate-700 rounded-sm text-xs uppercase tracking-wider cursor-pointer" aria-expanded="false" @click="langopen = ! langopen">
                    <span class="sr-only">Toggle language menu</span>
                    <span><?= $kirby->language()->code() ?></span>
                </button>

                <div class="block lg:hidden  group-[.is-open]/lang:block lg:absolute lg:top-full lg:right-0 lg:translate-y-2 lg:rounded-sm lg:bg-stone-200 lg:shadow-lg pt-6 lg:pt-0">
                    <h2 class="uppercase font-semibold mb-2 lg:sr-only">Languages</h2>
                    <ul class="flex flex-col gap-4 lg:gap-0">
                        <?php foreach ($kirby->languages() as $language): ?>
                            <li<?php e($kirby->language() == $language, ' class="active"') ?>>
                                <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>" class="block lg:px-4 lg:py-2 lg:text-sm lg:bg-slate-200 lg:hover:bg-slate-300 lg:rounded-sm <?php e($kirby->language() == $language, 'text-slate-900 lg:bg-slate-300') ?>">
                                    <?= html($language->name()) ?>
                                </a>
                                </li>
                            <?php endforeach ?>
                    </ul>

                </div>

            </div>

        </div>

    </div>



</nav>