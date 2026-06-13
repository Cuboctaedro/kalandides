<?php

/** @var Kirby\Cms\Page $page */

/** @var Kirby\Cms\Site $site */

/** @var Kirby\Cms\App $kirby */

?>

<?php if ($page->isHomePage()): ?>
    <div class="flex flex-col items-start bg-stone-100 text-stone-800 py-3 px-6 rounded-b-sm">
        <h1 class="text-xl pb-1">
            <?= $site->title()->html(); ?>
        </h1>
        <span class="text-xs font-sans uppercase tracking-wider">
            <?= $site->subtitle()->html(); ?>
        </span>
    </div>
<?php else: ?>
    <a class="flex flex-col items-start bg-stone-100 text-stone-800 py-3 px-6 hover:bg-stone-200 transition-colors rounded-b-sm" href="/">
        <span class="text-xl pb-1">
            <?= $site->title()->html(); ?>
        </span>
        <span class="text-xs font-sans uppercase tracking-wider">
            <?= $site->subtitle()->html(); ?>
        </span>
    </a>
<?php endif; ?>